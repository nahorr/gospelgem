@extends('layouts.public.app')

@section('content')

@include('layouts.public.includes.nav-header')
    <!-- Login -->
<section class="container g-py-80">
  <div class="row justify-content-center">
    <div class="col-sm-8 col-lg-6">
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
      @endif
      <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
        <header class="text-center mb-4">
          <h2 class="h2 g-color-black g-font-weight-600" style="margin-right: 20px;">Log In</h2>
          <div class="u-divider u-divider-center u-divider-linear-gradient u-divider-linear-gradient--gray-light-v3 w-50 mx-auto g-my-15">
            <i class="fa fa-circle u-divider__icon g-bg-white g-color-primary rounded-circle"></i>
          </div>
        </header>

        <!-- Form -->
        <form class="g-py-15" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <div class="mb-4">
                <div class="input-group g-brd-primary--focus">
                  <div class="input-group-prepend">
                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-py-15 g-px-15"  type="email" name="email" value="{{ old('email') }}" placeholder="johndoe@gmail.com" required autofocus>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>

              <div class="g-mb-35">
                <div class="input-group g-brd-primary--focus mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-py-15 g-px-15" type="password" name="password" required placeholder="Password" >
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="row justify-content-between">
                  <div class="col align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                      </div>
                      Keep signed in
                    </label>
                  </div>
                  <div class="col align-self-center text-right">
                    @if (Route::has('password.request'))
                      <a class="g-font-size-12" href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                  </div>
                </div>
              </div>
              <div class="mb-5">
                <button class="btn btn-md btn-block u-btn-primary g-py-13" type="submit">Login</button>
              </div>
              <!--
              <div class="d-flex justify-content-center text-center g-mb-30">
                <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                <span class="align-self-center g-color-gray-dark-v3 mx-4">OR</span>
                <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
              </div>
              -->
              <!-- Form Social Icons -->
              <!--
              <ul class="list-inline text-center mb-4">
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-facebook rounded-circle" href="#">
                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-twitter rounded-circle" href="#">
                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-google-plus rounded-circle" href="#">
                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-linkedin rounded-circle" href="#">
                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
              -->
            <!-- End Form Social Icons -->
           
        </form>
        <!-- End Form -->
        <footer class="text-center">
          <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a class="g-font-weight-600" href="{{ url('register') }}">Sign Up</a>
          </p>
        </footer>
      </div>
    </div>
  </div>
</section>
<!-- End Login --> 

@include('layouts.public.includes.footer')
@endsection
