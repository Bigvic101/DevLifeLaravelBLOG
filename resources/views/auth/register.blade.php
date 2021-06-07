@extends('layouts.master')

@section('body')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Fill out the form below to sign up to this blog</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>{{ __('Name') }}</label>
              <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}" required data-validation-required-message="Please enter your name." required autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address." required autocomplete="email">

              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm your password" name="password" required data-validation-required-message="Please confirm your password." name="password" required autocomplete="new-password">

              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label for="password-confirm">{{ __('Confirm Password') }}</label>
              <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required data-validation-required-message="Please enter your password" required autocomplete="new-password">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" name="sendMessageButton">{{ __('Register') }}</button>
        </form>
      </div>
    </div>
  </div>
  <hr>
@endsection
