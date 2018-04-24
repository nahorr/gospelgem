@extends('layouts.public.app')

@section('content')

@include('layouts.public.includes.nav-header')

    <!-- Signup -->
    <section class="g-bg-gray-light-v5">
      <div class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-sm-10 col-md-9 col-lg-6">
            <div class="u-shadow-v21 g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">Sign up</h2>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                  <div class="mb-4{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Full Name:</label>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>

                <div class="mb-4{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-6 mb-4{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="col-xs-12 col-sm-6 mb-4">
                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Confirm Password:</label>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="password" name="password_confirmation" required>
                  </div>
                </div>

                <div class="row justify-content-between mb-5">
                  <div class="col-8 align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </div>
                      I accept the <a href="#!">Terms and Conditions</a>
                    </label>
                  </div>
                  <div class="col-4 align-self-center text-right">
                    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">Sign up</button>
                  </div>
                </div>
              </form>
              <!-- End Form -->

              <footer class="text-center">
                <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Already have an account? <a class="g-font-weight-600" href="{{url('login')}}">sign in</a>
                </p>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Signup -->

@include('layouts.public.includes.footer')
@endsection
