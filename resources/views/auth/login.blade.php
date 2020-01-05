<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vannarin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <!-- Styles -->
        <style>
            html, body {
                background-image: url("{{ asset('/img/dragonfly-2551460.jpg') }}");
                background-position: all;
                background-color: #47af64;
                color: #ffffff;
                font-family: 'Kanit', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }
            .m-b-md2 {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body bgcolor="#faffd6">
        <div class="flex-center position-ref full-height" id="app">
            <div class="content">
                <img src = "{{ asset('/img/Logo_New.png') }}" width="150" />
                <div class="title m-b-md">
                    VANNARIN
                </div>

                <div class="links m-b-md2">
                    Agriculture go green
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md">
     
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">        
                                            <div class="col-md input-group input-group-lg">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md input-group input-group-lg">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!--div class="form-group row">
                                            <div class="col-md">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div -->

                                        <div class="form-group row mb-0">
                                            <div class="col-md offset-md ">
                                                <button type="submit" class="btn btn-primary btn-block btn-lg">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md offset-md">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md">
                                                    <p>New User? <a class="btn btn-link"  href="{{ route('register') }}">Register Here</a> </p>
                                            </div>
                                        </div>
        

                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

