<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Traits\CaptchaTrait;

class LoginController extends Controller
{
    use CaptchaTrait;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {

         
        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        return redirect()->intended($this->redirectPath());
    }
 
    /**
    * Overrides method in class 'AuthenticatesUsers'
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function showLoginForm()
    {
        $view = property_exists($this, 'loginView')
            ? $this->loginView : 'auth.authenticate';
        if (view()->exists($view)) {
            return view($view);
        }
        /**
        * seve the previous page in the session
        */
        $previous_url = Session::get('_previous.url');
        $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $ref = rtrim($ref, '/');
        if ($previous_url != url('login')) {
            Session::put('referrer', $ref);
            if ($previous_url == $ref) {
                Session::put('url.intended', $ref);
            }
        }
        /**
        * seve the previous page in the session
        * end
        */
        return view('auth.login');
    }
    /**
    * Overrides method in class 'AuthenticatesUsers'
    *
    * @param Request $request
    * @param $throttles
    *
    * @return \Illuminate\Http\RedirectResponse
    */
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }
        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::guard($this->getGuard())->user());
        }
        /*return to the previous page*/
        return redirect()->intended(Session::pull('referrer'));
        //return redirect()->intended($this->redirectPath()); /*Larevel default*/
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
    */
    protected function validateLogin(Request $request)
    {
        $request['captcha'] = $this->captchaCheck();

        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => 'required',
            'captcha' => 'required|min:1',
        ],
        [
            'g-recaptcha-response.required' => 'Captcha is required',
            'captcha.min' => 'Wrong captcha, please try again.'
        ]);
    }
}
