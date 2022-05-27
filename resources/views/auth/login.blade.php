@extends('layouts.vanilla')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <div class="text-center pb-4">
                <div class="row">
                    <div class="col-sm mt-3">
                        <strong>Returning Student</strong>
                        <br>Login using the main email from your studio account
                        <br>(If you created an account last year to view level placements)
                    </div>
                    <div class="col-sm mt-3">
                        <strong>New Student</strong>
                        <br>Register a new account with the main email from your studio account
                        <div class="d-flex justify-content-center">
                            <a href="/register" class="text-center text-decoration-none">Click here to <span class="text-danger fw-bold">Register</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3 row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-left mt-3">
                    <strong>Helpful Tips</strong>
                    <br>&middot; If you have multiple dancers, just create one account.
                    <br>&middot; If you try to Register a new account and you receive a message in red that says "the email has already been taken", then use the Login option.
                    <br>&middot; If you forgot your password, click “forgot your password”, enter your email address, and click send password reset link.
                    <br>&middot; Level placements are only provided for the style (Ballet, Jazz, Tap) that you took.  If there is a 0 noted, that means your dancer did not participate in that style this past season.
                    <br>&middot; If you don’t see your dancer’s info, please try one of your other email addresses.
                </p>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection
