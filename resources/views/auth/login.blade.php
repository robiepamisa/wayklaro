@extends('layouts.login_register.layout')

@section('content')
    <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
              <img class="imageLogin" src="{{asset('assets/img/logo.png')}}" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-4">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-3">Welcome Back!</h1>
                  </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                           

                            <div class="col-md-11 offset-md-1">
                                <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                         

                            <div class="col-md-11 offset-md-1">
                                <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-11 offset-md-1">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <hr>
                     <div class="text-center">
                    <a class="small" href="{{ route('register') }}">{{ __('Create account!') }}</a>
                  </div>
            </div>
        </div>
    </div>

@endsection
