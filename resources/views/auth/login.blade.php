@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100" >
        <div class="wrap-login100">
            <form  method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                <span class="login100-form-logo">
                    <img class="logo-image"src="{{asset('image/ftse.png')}}" alt="">
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="pass" placeholder="Password" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1 {{ old('remember') ? 'checked' : '' }}" type="checkbox" name="remember"  >

                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-90">

                    @if (Route::has('password.request'))
                                    <a class="txt1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
