<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('auth/login/style.css') }}">
</head>

<body>
    <div class="mainFrame p-2 flex flex-row h-screen">
        <div class="leftFrame  p-1 basis-2/5 h-screen rounded ">
            <div class="leftFrameContent h-screen text-white  p-2 rounded flex justify-between flex-col">
                <div class="top m-2 p-2  flex flex-col gap-3 ">
                    <img src="" alt="">
                    <h1 id="loginheader">Start Your Journey</h1>
                    <p>Discover the Bangladesh first fastest emergency service for every people in every situation that
                        brings safety in a new way.
                    </p>
                </div>
                <div class="bottom m-2 p-2">
                    <p class="">One day, people should memorize that, A person who works hard will win one day.
                    </p>
                    <img class=""src="" alt="">
                    <h1 class="">Founder<br>PES</h1>
                </div>
            </div>

        </div>
        <div class="rightFrame p-2 basis-3/5">
            <div class="card-body mt-5">
                <h1 class="" id="rightFrameLogin">Login</h1>
                <form method="POST" action="{{ route('login') }} " class="">
                    @csrf

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary text-black">
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
            </div>
        </div>
    </div>
</body>

</html>
