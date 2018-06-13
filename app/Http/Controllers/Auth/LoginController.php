<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;

class LoginController extends Controller
{
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

    /* Handle Social login request
 
    *
 
    * @return response
 
    */
 
   public function socialLogin($social)
 
   {
 
       return Socialite::driver($social)->redirect();
 
   }
 
   /**
 
    * Obtain the user information from Social Logged in.
 
    * @param $social
 
    * @return Response
 
    */
 
   public function handleProviderCallback($social)
 
   {
 
       $userSocial = Socialite::driver($social)->user();
 
       $user = User::where(['email' => $userSocial->getEmail()])->first();
 
       if($user){
 
           Auth::login($user);
 
           return redirect()->action('HomeController@index');
 
       }else{
 
           return view('auth.register',['name' => $userSocial->getName(), 'email' => $userSocial->getEmail()]);
 
       }
 
   }
}
