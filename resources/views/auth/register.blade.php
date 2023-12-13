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

    {{-- for login and register pages --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    {{-- needed for navbar  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hoda_style.css') }}">
</head>

<body id="register_bg">

    {{-- navbar should be here --}}
    @include('includes.nav')

    {{-- start login section --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-12">
                <section class="login-sec m-auto">
                    <h5 class="text-center text-capitalize mb-4 text-light">Sign Up And <span
                            class="color-yellow">Start</span> Learning</h5>
                    <div class="box d-flex flex-column">
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            <input class="dark-mode rounded" type="text" name="name" class="w-100"
                                placeholder="Full Name">
                            <input class="dark-mode rounded" type="text" name="email" class="w-100"
                                placeholder="Email">
                            <input class="dark-mode rounded" type="password" name="password" class="w-100"
                                placeholder="Password">
                            <input class="dark-mode rounded" type="password" name="password_confirmation" class="w-100"
                                placeholder="Re-enter Password">
                            <button class="btn i7 text-uppercase rounded d-block m-auto" type="submit">Sign
                                Up</button>
                            <div class="send-info my-4">
                                <input type="checkbox" name="info" id="info">
                                <label for="info" class="text-light m-0">Send Me Special Offers, Personalized
                                    Recomendations And Learning tips</label>
                            </div>
                            <p class="text-center h6 text-light">
                                already have an account ?
                                <a href="{{ route('login') }}" class="color-yellow text-capitalize">log in</a>
                            </p>
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

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('/') }}js/pw_strenght.js"></script>
    <script>
        $(document).ready(function() {
            $('.darkModeOff, .darkModeOn').click(function(e) {
                e.stopPropagation();
                $('.dark-mode').toggleClass('dark-mode-on');
                $('.darkModeOff, .darkModeOn').toggleClass('d-none');
            });
        });
    </script>
    @include('includes.scripts')

</body>

</html>
