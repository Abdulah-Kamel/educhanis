﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LMS">
    <meta name="author" content="LMS">
    <title>{{ setting('site.title') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{URL::asset('img\favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{URL::asset('img\apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{URL::asset('img\apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{URL::asset('img\apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{URL::asset('img\apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800')}}" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{URL::asset('css\bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css\style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css\vendors.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css\icon_fonts\css\all_icons.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{URL::asset('css\custom.css')}}" rel="stylesheet">

</head>

<body id="login_bg">

<nav id="menu" class="fake_menu"></nav>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<div id="login">
    <aside>
        <figure>
            <a href="{{ url('/') }}"><img src="{{ Storage::disk('public')->url(setting('site.logo')) }}" width="149" height="42" data-retina="true" alt=""></a>
        </figure>
        {{ __('Please confirm your password before continuing.') }}
        <form method="POST" action="{{ route('password.confirm') }}">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group">
                 <span class="input">
					<input class="input_field @error('password') is-invalid @enderror" type="password" autocomplete="off"  name="password" required >
                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    <label class="input_label control-label">
                        <span class="input__label-content control-label">{{ __('Password') }}</span>

					    </label>

                    </span>


            </div>
            <button type="submit" class="btn_1 rounded full-width add_top_60">{{ __('Confirm Password') }}</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </form>
        <div class="copy">© {{ date('Y') }} {{ setting('site.title') }}</div>
    </aside>
</div>
<!-- /login -->

<!-- COMMON SCRIPTS -->
<script src="{{URL::asset('js\jquery-2.2.4.min.js')}}"></script>
<script src="{{URL::asset('js\common_scripts.js')}}"></script>
<script src="{{URL::asset('js\main.js')}}"></script>
<script src="{{URL::asset('assets\validate.js')}}"></script>

</body>
</html>
