@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')
<div class="row">
  <div class="col-md-12">
    @include('flash::message')
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
  </div>
</div>
<!-- Signup -->
    <section class="g-min-height-100vh g-flex-centered g-bg-white-radialgradient-circle">
      <div class="container g-py-50">
        <div class="row justify-content-center">
          <div class="col-sm-10 col-md-9 col-lg-6 rounded">
            <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">Invite Gosgem to your city!</h2>
                <hr>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="post" action="{{ url('/post_invite_gosgem') }}">
                   {{ csrf_field() }}

                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Select the Mentor you wish to invite:</label>
                  <select name="mentor" id="mentor" class="form-control rounded" required="">
                    
                        @foreach($mentors as $key => $mentor)
                          <option value="{{ $mentor->full_name }}">
                              {{ $mentor->full_name }}
                          </option>
                        @endforeach
                  </select>
                </div>

                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Name of Organization/Individual:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="organization_name" required="">
                </div>

                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Country:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="country" required="">
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Event:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="event" required="">
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Brief Description of Event:</label>
                 <textarea class="form-control rounded-0 form-control-md" name="description" rows="6"></textarea required>
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Date of Event:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="date" value="2019-02-26" name="event_date" required="">
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Venue of Event:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="venue" required="">
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Contact Person:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="contact_person" required="">
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Contact Number:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="contact_phone" required="">
                </div>
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Contact Email:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" name="contact_email" required="">
                </div>
                <div class="mb-4">
                  <div class="g-recaptcha" data-sitekey="{{env('RE_CAPTCHA_SITEKEY')}}"></div>
                </div>
                <div class="row justify-content-between mb-5">
                  <div class="col-4 align-self-center text-center">
                    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">Submit Form</button>
                  </div>
                </div>
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Signup -->

	@include('layouts.public.includes.footer')

@endsection