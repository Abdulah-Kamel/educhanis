<head>
    <meta charset="utf-8" />
    <meta name="author" content="LMS" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LMS - Online Course & Education</title>


    @if (app()->getLocale() == 'en')
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('assets/css/styles_ar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/colors_ar.css') }}" rel="stylesheet">
    @endif
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo png 3-01.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=Lato:ital,wght@1,300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <link href="{{ asset('assets/toastr/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/review.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/boostrip-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">{{-- font awesome 6 free  --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/swiper.css') }}"> --}}
    <link href="https://fastly.jsdelivr.net/npm/swiper@10.1.0/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/loading.css') }}">
    @livewireStyles

    {{-- Card style --}}
</head>
