@extends('layouts.public.app')

@section('content')

@include('layouts.public.includes.nav-header')

    <!-- Signup -->
<section class="container g-py-80">
  <div class="row justify-content-center">
    <div class="col-sm-10 col-md-9 col-lg-6">
      <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
        <header class="text-center mb-4">
          <h2 class="h2 g-color-black g-font-weight-600" style="margin-right: 15px;">Sign Up</h2>
          <div class="u-divider u-divider-center u-divider-linear-gradient u-divider-linear-gradient--gray-light-v3 w-50 mx-auto g-my-10">
            <i class="fa fa-circle u-divider__icon g-bg-white g-color-primary rounded-circle"></i>
          </div>
        </header>

        <!-- Form -->
        <form class="g-py-15" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-xs-12 col-sm-6 mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                </div>
                <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-finance-067 u-line-icon-pro"></i></span>
                </div>
                <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>

          <div class="mb-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-communication-062 u-line-icon-pro"></i></span>
              </div>
              <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="email" name="email" value="{{ old('email') }}" placeholder="johndoe@gmail.com" required>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-6 mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro"></i></span>
                </div>
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="password" placeholder="Password" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 mb-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i class="icon-media-094 u-line-icon-pro"></i></span>
                </div>
                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="password"  name="password_confirmation" placeholder="Confirm Password" required>
              </div>
            </div>
          </div>

          <div class="mb-4">
            <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25">
              <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
              <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
              </div>
              I accept the <a href="#">Terms and Conditions</a>
            </label>
          </div>
          <button class="btn btn-md btn-block u-btn-primary rounded-0 g-py-15 mb-5" type="submit">Signup</button>
        </form>
        <!-- End Form -->
        <footer class="text-center">
          <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Already have an account? <a class="g-font-weight-600" href="{{ url('login') }}">Sign In</a>
          </p>
        </footer>
      </div>
    </div>
  </div>
</section>
<!-- End Signup -->

@include('layouts.public.includes.footer')
@endsection
