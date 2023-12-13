<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LMS">
    <meta name="author" content="LMS">
    <title>{{ setting('site.title') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img\favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img\apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img\apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img\apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img\apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/vendors.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('/') }}css/custom.css" rel="stylesheet">

    {{-- for login and register pages Mahmoud-Yousry design --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    {{-- needed for navbar  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hoda_style.css') }}">

</head>

<body id="login_bg">

    {{-- navbar should be here --}}
    @include('includes.nav')

    {{-- start login section --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-12">
                <section class="login-sec m-auto">
                    <h3 class="text-center text-capitalize mb-4">Log in</h3>
                    <div class="box d-flex flex-column">

                        <a class="social-buttons dark-mode rounded" href="{{ route('google-auth') }}">
                            <i class="fa-brands fa-google fa-xl fa-fw mr-2"></i>continue with google
                        </a>
                        <a class="social-buttons dark-mode rounded" href="{{ route('facebook-auth') }}">
                            <i class="fa-brands fa-square-facebook fa-xl fa-fw mr-2"></i>continue with facebook
                        </a>
                        <a class="social-buttons dark-mode rounded" href="{{ route('linkedin-auth') }}">
                            <i class="fa-brands fa-linkedin fa-xl fa-fw mr-2"></i>continue with Linked In
                        </a>

                        <form class="" action="" method="POST">
                            @csrf
                            <input class="dark-mode" type="text" name="email" class="" placeholder="Email">
                            <input class="dark-mode" type="password" name="password" class=""
                                placeholder="Password">
                            <button type="submit" class="btn i7 rounded d-block m-auto">Log in</button>

                            <p class="text-center h6 my-3">
                                <span class="color-yellow">or</span>
                                <a href="#" class="white-link">Forgot Password</a>
                            </p>

                            {{-- errors section --}}
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <p class="mb-0">{{ $error }}</p>
                                    </div>
                                @endforeach
                            @endif

                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    {{-- end login section --}}

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('/') }}js\jquery-2.2.4.min.js"></script>
    <script src="{{ asset('/') }}js\common_scripts.js"></script>
    <script src="{{ asset('/') }}js\main.js"></script>
    <script src="{{ asset('/') }}assets\js\all.min.js"></script>
    <script src="{{ asset('/') }}assets\validate.js"></script>
    @include('includes.scripts')

</body>

</html>
