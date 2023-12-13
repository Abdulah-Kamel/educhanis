<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@extends('layouts.app')

@section('content')
    <div class="xx-3">
        <div class="m-auto xx-4" data-overlay="0">
            <div class="container">
                <!-- Type -->
                <div class="card-body">

                    <div class="row  g-2 align-items-center xx-5">
                        <div class="col-lg-6 col-md-10 col-sm-12 xx-6">
                            <div class="text">
                                <h1 class="cl_2 f_2 large_h " style="font-size:36px">
                                    @lang('Educhains:')
                                    <span class="aaq">@lang('empowering you to build')</span>
                                    @lang('your future.')
                                </h1>
                            </div>
                            <p>
                                @lang('EduChains is a leading provider of innovative educational and training solutions that aim to achieve excellence in skill development and empower young people to achieve their full potential.')
                            </p>
                            <form method="get" action="{{ route('searchCourse') }}">
                                <div class="banner-search shadow_high mt-4">
                                    <div class="search_hero_wrapping">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-10 col-sm-12">
                                                <div class="form-group">
                                                    <div class="input-with-icon">
                                                        <input name="search" type="text" class="form-control"
                                                            placeholder="{{ __('Keyword') }}" id="search">
                                                        <img src="{{ asset('assets/img/search.svg') }}"
                                                            style=" object-fit: contain;" class="search-icon"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="height: 50px;" class="col-lg-3 col-md-2 col-sm-12 pl-0">
                                                <div class="form-group none">
                                                    <button id="clicked"
                                                        style="background-color: #7F56D9;  height: 100%;  " type="submit"
                                                        class="btn search-btn full-width ">{{ __('Get start') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="m-auto dark-mode">
        {{-- ================================================== start Our Services  ========================================================= --}}
        <div class="pb-5">
            <div class="container">
                <div class="text-center pt-5">
                    <p class="main-title">{{ __('Our Services') }}</p>
                    <div class="xx-7">
                        <h2 class="about">@lang('Educhains: empowering you to build your future.')</h2>
                    </div>
                </div>
            </div>

            <div class="aa pt-3 g-10 container m-auto udate_about text-center">
                <div class="xx-8">
                    <div class="gt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="98" height="99" viewBox="0 0 98 99"
                                fill="none">
                                <path
                                    d="M46.7255 93.451C20.9695 93.451 0 72.4815 0 46.7255C0 20.9695 20.9695 0 46.7255 0C72.4815 0 93.451 20.9695 93.451 46.7255C93.451 72.4815 72.4815 93.451 46.7255 93.451ZM46.7255 6.83788C24.7075 6.83788 6.83788 24.7531 6.83788 46.7255C6.83788 68.6979 24.7075 86.6131 46.7255 86.6131C68.7435 86.6131 86.6131 68.6979 86.6131 46.7255C86.6131 24.7531 68.7435 6.83788 46.7255 6.83788Z"
                                    fill="#4F4E4E" />
                                <path
                                    d="M94.5926 98.009C93.7265 98.009 92.8603 97.6899 92.1765 97.0061L83.0594 87.889C81.7374 86.567 81.7374 84.3789 83.0594 83.0569C84.3814 81.7349 86.5695 81.7349 87.8915 83.0569L97.0086 92.174C98.3306 93.496 98.3306 95.6841 97.0086 97.0061C96.3248 97.6899 95.4587 98.009 94.5926 98.009Z"
                                    fill="#4F4E4E" />
                            </svg>

                            <circle cx="49.5" cy="49.5" r="23.5" fill="#4F4E4E" />
                            <circle cx="57.5" cy="31.5" r="15.5" fill="#EEEEEE" />
                        </svg>

                    </div>

                    <h5 class="head dark-mode"> {{ __('Variety Of Educational Programs') }}</h5>
                    <p class="dark-mode">@lang('We offer a variety of courses, workshops, and training in different fields, starting from academic specializations to modern practical and professional skills that the labor market needs inside and outside Egypt.') </p>
                </div>
                <div class="xx-8">
                    <div class="gt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <g clip-path="url(#clip0_11_213)">
                                <path
                                    d="M50 100C22.4297 100 0 77.5703 0 50C0 22.4297 22.4297 0 50 0C77.5703 0 100 22.4297 100 50C100 77.5703 77.5703 100 50 100ZM50 3.125C24.1531 3.125 3.125 24.1531 3.125 50C3.125 75.8469 24.1531 96.875 50 96.875C75.8469 96.875 96.875 75.8469 96.875 50C96.875 24.1531 75.8469 3.125 50 3.125Z"
                                    fill="#CCD1D9" />
                                <path d="M10.9375 71.875V78.125H4.6875L8.24844 74.5781V74.5625L10.9375 71.875Z"
                                    fill="#F5F7FA" />
                                <path d="M95.3125 12.5H89.0625V6.25L95.3125 12.5Z" fill="#F5F7FA" />
                                <path d="M20.3125 88.2812V93.75H4.6875V78.125H10.9375V71.875H20.3125V88.2812Z"
                                    fill="#E6E9ED" />
                                <path d="M95.3125 12.5V28.125H93.2344H79.6875V11.7188V6.25H89.0625V12.5H95.3125Z"
                                    fill="#E6E9ED" />
                                <path
                                    d="M68.75 48.0156V65.625C68.75 67.3594 67.3438 68.75 65.625 68.75H34.375C32.6547 68.75 31.25 67.3594 31.25 65.625V48.0156L50 53.125L68.75 48.0156Z"
                                    fill="#4F4E4E" />
                                <path d="M91.7641 74.5781L95.3125 78.125H89.0625V71.875L91.7641 74.5781Z" fill="#F5F7FA" />
                                <path d="M95.3125 78.125V93.75H79.6875V88.2812V71.875H89.0625V78.125H95.3125Z"
                                    fill="#E6E9ED" />
                                <path
                                    d="M84.375 43.75L68.75 48.0156L50 53.125L31.25 48.0156L15.625 43.75L50 34.375L84.375 43.75Z"
                                    fill="#656D78" />
                                <path d="M10.9375 6.25V12.5H4.6875L10.9375 6.25Z" fill="#F5F7FA" />
                                <path d="M20.3125 11.7188V28.125H6.76406H4.6875V12.5H10.9375V6.25H20.3125V11.7188Z"
                                    fill="#E6E9ED" />
                                <path
                                    d="M31.2516 67.1828C30.3875 67.1828 29.6891 66.4844 29.6891 65.6203V48.0109C29.6891 47.1469 30.3875 46.4484 31.2516 46.4484C32.1156 46.4484 32.8141 47.1469 32.8141 48.0109V65.6203C32.8141 66.4844 32.1156 67.1828 31.2516 67.1828Z"
                                    fill="#545C66" />
                                <path
                                    d="M68.7484 67.1828C67.8844 67.1828 67.1859 66.4844 67.1859 65.6203V48.0109C67.1859 47.1469 67.8844 46.4484 68.7484 46.4484C69.6125 46.4484 70.3109 47.1469 70.3109 48.0109V65.6203C70.3109 66.4844 69.6125 67.1828 68.7484 67.1828Z"
                                    fill="#545C66" />
                                <path
                                    d="M50 54.6891C49.8609 54.6891 49.7234 54.6703 49.5875 54.6344L15.2125 45.2563C14.5344 45.0703 14.0625 44.4531 14.0625 43.7484C14.0625 43.0438 14.5344 42.4266 15.2141 42.2406L49.5891 32.8656C49.8578 32.7922 50.1422 32.7922 50.4094 32.8656L84.7844 42.2406C85.4656 42.4266 85.9375 43.0438 85.9375 43.7484C85.9375 44.4531 85.4656 45.0703 84.7875 45.2563L50.4125 54.6344C50.2766 54.6703 50.1391 54.6891 50 54.6891ZM21.5625 43.7484L50 51.5078L78.4375 43.7484L50 35.9922L21.5625 43.7484Z"
                                    fill="#656D78" />
                                <path
                                    d="M65.6203 70.3172H34.3796C33.5156 70.3172 32.8171 69.6188 32.8171 68.7547C32.8171 67.8906 33.5156 67.1922 34.3796 67.1922H65.6203C66.4843 67.1922 67.1828 67.8906 67.1828 68.7547C67.1828 69.6188 66.4843 70.3172 65.6203 70.3172Z"
                                    fill="#545C66" />
                                <path
                                    d="M84.375 45.3109H50C49.1359 45.3109 48.4375 44.6125 48.4375 43.7484C48.4375 42.8844 49.1359 42.1859 50 42.1859H84.375C85.2391 42.1859 85.9375 42.8844 85.9375 43.7484C85.9375 44.6125 85.2391 45.3109 84.375 45.3109Z"
                                    fill="#D79330" />
                                <path
                                    d="M84.375 54.6859C83.5109 54.6859 82.8125 53.9875 82.8125 53.1234V43.7484C82.8125 42.8844 83.5109 42.1859 84.375 42.1859C85.2391 42.1859 85.9375 42.8844 85.9375 43.7484V53.1234C85.9375 53.9875 85.2391 54.6859 84.375 54.6859Z"
                                    fill="#D79330" />
                                <path
                                    d="M34.3797 70.3109C31.7938 70.3109 29.6891 68.2062 29.6891 65.6203C29.6891 64.7562 30.3875 64.0578 31.2516 64.0578C32.1156 64.0578 32.8141 64.7562 32.8141 65.6203C32.8141 66.4844 33.5157 67.1859 34.3797 67.1859C35.2438 67.1859 35.9422 67.8844 35.9422 68.7484C35.9422 69.6125 35.2438 70.3109 34.3797 70.3109Z"
                                    fill="#545C66" />
                                <path
                                    d="M65.6204 70.3109C64.7563 70.3109 64.0579 69.6125 64.0579 68.7484C64.0579 67.8844 64.7563 67.1859 65.6204 67.1859C66.4844 67.1859 67.186 66.4844 67.186 65.6203C67.186 64.7562 67.8844 64.0578 68.7485 64.0578C69.6125 64.0578 70.311 64.7562 70.311 65.6203C70.311 68.2062 68.2063 70.3109 65.6204 70.3109Z"
                                    fill="#545C66" />
                            </g>
                            <defs>
                                <clipPath id="clip0_11_213">
                                    <rect width="100" height="100" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h5 class="head dark-mode"> {{ __('Interactive Educational Experience') }}</h5>
                    <p class="dark-mode"> {!! app()->getLocale() == 'en' ? setting('about.our_serves_p2_en') : setting('about.our_serves_p2_ar') !!} </p>
                </div>
                <div class="xx-8">
                    <div class="gt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98"
                            fill="none">
                            <path
                                d="M49 0C22.001 0 0 22.001 0 49C0 75.999 22.001 98 49 98C75.999 98 98 75.999 98 49C98 22.001 75.999 0 49 0ZM72.422 37.73L44.639 65.513C43.953 66.199 43.022 66.591 42.042 66.591C41.062 66.591 40.131 66.199 39.445 65.513L25.578 51.646C24.157 50.225 24.157 47.873 25.578 46.452C26.999 45.031 29.351 45.031 30.772 46.452L42.042 57.722L67.228 32.536C68.649 31.115 71.001 31.115 72.422 32.536C73.843 33.957 73.843 36.26 72.422 37.73Z"
                                fill="#4F4E4E" />
                        </svg>
                    </div>
                    <h5 class="head dark-mode">
                        {{ __('Expert And Professional Trainers') }}
                    </h5>
                    <p class="dark-mode"> {!! app()->getLocale() == 'en' ? setting('about.our_serves_p3_en') : setting('about.our_serves_p3_ar') !!} </p>
                </div>
            </div>
        </div>

        {{-- ================================================== End Our Services  ========================================================= --}}


        {{-- ================================================== Start Our Coursess  ========================================================= --}}

        <div class="m-2 m-auto ">
            <div class="container">
                <div class="text-center pt-5">
                    <p class="main-title">{{ __('Our Coursess') }}</p>
                    <div class="xx-7">
                        <h2 class="about">@lang('Educhains: empowering you to build your future.')</h2>
                    </div>
                </div>


                <div class="courses">

                    <ul class="border-bottom  list-ul">


                        <li class="text-nowrap list-li add_color add" value=" don " id="all"> {{ __('All') }}
                        </li>
                        <li class="lines"></li>
                        @foreach ($categories as $cate)
                            <li class="text-nowrap list-li " data-filter="{{ '.' . $cate->name }}"
                                name="{{ $cate->id }}" id="filter">{{ $cate->name }}
                            </li>
                            <li class="lines"></li>
                        @endforeach

                    </ul>
                </div>

                <div style="" class="active all-slide">
                    <div class="body">
                        <div class="swiper mySwiper dark-mode">
                            <div id="courses" class="swiper-wrapper">
                                @foreach ($courses as $course)
                                    <div class="swiper-slide ght dark-mode">
                                        <div class="cardd">
                                            <div class="item style_cured">
                                                <div class="was">
                                                    <a
                                                        href="@if (!isset(auth()->user()->id)) {{ url('login') }} @elseif($course->price == 0){{ route('join', $course->slug) }} @else {{ route('payment', $course->slug) }} @endif">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M6 6C6 4.89543 6.89543 4 8 4H16C17.1046 4 18 4.89543 18 6V21L12 15L6 21V6Z"
                                                                stroke="#D79330" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="39"
                                                            height="39" viewBox="0 0 39 39" fill="none">

                                                            <circle cx="19.5" cy="19.5" r="19.5"
                                                                fill="white" />


                                                        </svg>
                                                    </a>
                                                </div>
                                                <a class="imgs" href="{{ route('course_details', $course->slug) }}">
                                                    <div class="items-curd">
                                                        <img width="100%" height="250px"
                                                            src="{{ asset($course->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="items-dec">
                                                        <span class="title-card">
                                                            Design
                                                        </span>
                                                        <div class="body-card">
                                                            <div class="course-price">
                                                                <div class="price">${{ $course->price }} </div>
                                                            </div>
                                                            <div class="cards">
                                                                <h4 value=' '
                                                                    class=" p-0  items_dec_h4 d-inline-block text-truncate"
                                                                    style="max-width: 220px;">
                                                                    {{ $course->title }}</h4>
                                                                <div style=" display: flex; width: 30px; height: 30px; justify-content: end; "
                                                                    class="col-md-2">
                                                                    <img src="{{ asset('assets/learn website/Frame-1.png') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="details">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M8.5 5.66667V8.5L9.91667 9.91667M14.875 8.5C14.875 12.0208 12.0208 14.875 8.5 14.875C4.97918 14.875 2.125 12.0208 2.125 8.5C2.125 4.97918 4.97918 2.125 8.5 2.125C12.0208 2.125 14.875 4.97918 14.875 8.5Z"
                                                                        stroke="black" stroke-opacity="0.5"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                                <p>12h 52m</p>
                                                            </span>
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="17"
                                                                    height="17" viewBox="0 0 17 17" fill="none">
                                                                    <path
                                                                        d="M9.91732 7.01217V5.80801C10.3069 5.64273 10.7055 5.51877 11.113 5.43613C11.5205 5.35349 11.9483 5.31217 12.3965 5.31217C12.7034 5.31217 13.0045 5.33579 13.2996 5.38301C13.5947 5.43023 13.884 5.48926 14.1673 5.56009V6.69342C13.884 6.58717 13.5976 6.50737 13.3081 6.45401C13.0186 6.40065 12.7148 6.3742 12.3965 6.37467C11.9479 6.37467 11.517 6.43087 11.1038 6.54326C10.6906 6.65565 10.2951 6.81195 9.91732 7.01217ZM9.91732 10.908V9.70384C10.3069 9.53856 10.7055 9.41461 11.113 9.33197C11.5205 9.24933 11.9483 9.20801 12.3965 9.20801C12.7034 9.20801 13.0045 9.23162 13.2996 9.27884C13.5947 9.32606 13.884 9.38509 14.1673 9.45592V10.5893C13.884 10.483 13.5976 10.4032 13.3081 10.3498C13.0186 10.2965 12.7148 10.27 12.3965 10.2705C11.9479 10.2705 11.517 10.3236 11.1038 10.4299C10.6906 10.5361 10.2951 10.6955 9.91732 10.908ZM9.91732 8.96009V7.75592C10.3069 7.59065 10.7055 7.46669 11.113 7.38405C11.5205 7.30141 11.9483 7.26009 12.3965 7.26009C12.7034 7.26009 13.0045 7.2837 13.2996 7.33092C13.5947 7.37815 13.884 7.43717 14.1673 7.50801V8.64134C13.884 8.53509 13.5976 8.45529 13.3081 8.40192C13.0186 8.34856 12.7148 8.32212 12.3965 8.32259C11.9479 8.32259 11.517 8.37879 11.1038 8.49117C10.6906 8.60356 10.2951 8.75987 9.91732 8.96009ZM4.60482 11.333C5.15968 11.333 5.6999 11.3951 6.22548 11.5193C6.75107 11.6435 7.27335 11.8293 7.79232 12.0768V5.09967C7.30829 4.81634 6.79475 4.60384 6.25169 4.46217C5.70864 4.32051 5.15968 4.24967 4.60482 4.24967C4.17982 4.24967 3.75765 4.29099 3.33832 4.37363C2.91898 4.45627 2.51476 4.58023 2.12565 4.74551V11.758C2.53885 11.6163 2.94921 11.5101 3.35673 11.4393C3.76426 11.3684 4.18029 11.333 4.60482 11.333ZM9.20898 12.0768C9.72843 11.8288 10.2507 11.6428 10.7758 11.5186C11.3009 11.3944 11.8412 11.3325 12.3965 11.333C12.8215 11.333 13.2377 11.3684 13.6453 11.4393C14.0528 11.5101 14.4629 11.6163 14.8757 11.758V4.74551C14.4861 4.58023 14.0816 4.45627 13.6623 4.37363C13.2429 4.29099 12.821 4.24967 12.3965 4.24967C11.8416 4.24967 11.2927 4.32051 10.7496 4.46217C10.2066 4.60384 9.69301 4.81634 9.20898 5.09967V12.0768ZM8.50065 14.1663C7.93398 13.7177 7.3201 13.3695 6.65898 13.1215C5.99787 12.8736 5.31315 12.7497 4.60482 12.7497C4.10898 12.7497 3.62189 12.8146 3.14353 12.9445C2.66516 13.0743 2.20782 13.2573 1.77148 13.4934C1.52357 13.6233 1.28462 13.6174 1.05465 13.4757C0.824679 13.334 0.709457 13.1275 0.708984 12.8559V4.32051C0.708984 4.19065 0.741568 4.06669 0.806734 3.94863C0.871901 3.83058 0.969179 3.74204 1.09857 3.68301C1.64162 3.39967 2.20829 3.18717 2.79857 3.04551C3.38885 2.90384 3.99093 2.83301 4.60482 2.83301C5.28954 2.83301 5.95962 2.92155 6.61507 3.09863C7.27051 3.27572 7.89904 3.54134 8.50065 3.89551C9.10273 3.54134 9.7315 3.27572 10.3869 3.09863C11.0424 2.92155 11.7122 2.83301 12.3965 2.83301C13.0104 2.83301 13.6125 2.90384 14.2027 3.04551C14.793 3.18717 15.3597 3.39967 15.9027 3.68301C16.0326 3.74204 16.1301 3.83058 16.1953 3.94863C16.2604 4.06669 16.2928 4.19065 16.2923 4.32051V12.8559C16.2923 13.1275 16.1773 13.334 15.9474 13.4757C15.7174 13.6174 15.4782 13.6233 15.2298 13.4934C14.793 13.2573 14.3357 13.0743 13.8578 12.9445C13.3799 12.8146 12.8928 12.7497 12.3965 12.7497C11.6882 12.7497 11.0034 12.8736 10.3423 13.1215C9.68121 13.3695 9.06732 13.7177 8.50065 14.1663Z"
                                                                        fill="black" fill-opacity="0.5" />
                                                                </svg>
                                                                <p>14 lessons</p>
                                                            </span>
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                    height="17" viewBox="0 0 19 17" fill="none">
                                                                    <path
                                                                        d="M14.4584 10.625C16.0232 10.625 17.2917 11.8935 17.2917 13.4583V14.875H15.875M12.3334 7.7024C13.5554 7.38787 14.4584 6.27855 14.4584 4.95833C14.4584 3.63811 13.5554 2.52879 12.3334 2.21426M10.2084 4.95833C10.2084 6.52314 8.93985 7.79167 7.37504 7.79167C5.81023 7.79167 4.54171 6.52314 4.54171 4.95833C4.54171 3.39353 5.81023 2.125 7.37504 2.125C8.93985 2.125 10.2084 3.39353 10.2084 4.95833ZM4.54171 10.625H10.2084C11.7732 10.625 13.0417 11.8935 13.0417 13.4583V14.875H1.70837V13.4583C1.70837 11.8935 2.9769 10.625 4.54171 10.625Z"
                                                                        stroke="black" stroke-opacity="0.5"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                                <p>Enrolled</p>
                                                            </span>
                                                        </div>



                                                        <div class="row pt-3 pb-3">
                                                            @if ($course->trainer)
                                                                <div class="   align-items-center  d-flex col-md-6">
                                                                    @if ($course->trainer->image)
                                                                        <img style="width: 40px;      height: 40px; "
                                                                            class="rounded-circle  "
                                                                            src="{{ Storage::disk('public')->url($course->trainer->image) }}"
                                                                            alt="">
                                                                    @else
                                                                        <img style="width: 28px;      height: 28px; "
                                                                            class="rounded-circle  "
                                                                            src="{{ asset('assets/learn website/Ellipse 170.png') }}"
                                                                            alt="">
                                                                    @endif
                                                                    <div class="pl-2 text- ">
                                                                        <h4 class="p-0 m-0  text-truncate"
                                                                            style="max-width: 200px;font-size:16px;font-weight:400">
                                                                            {{ $course->trainer->name }}
                                                                        </h4>

                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                </a>

                                            </div>

                                        </div>
                                    </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- ================================================== End Our Coursess  ========================================================= --}}

        {{-- ================================================== Start Our Coursess  ========================================================= --}}
        <div class="container">
            <div class="xx-7 pt-3">
                <span class="Y2IQFc about" lang="en">
                    title
                </span>
            </div>
        </div>

        <section class="mobile-head">

            <div class="container">
                <div class="head1 align-items-center">
                    <div class="">
                        <div class="list_facts_wrap_img">
                            <!-- <iframe src="{{ setting('about.video') }}" width="100%" height="400px" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                    </div>
                    <div class="title">
                        <div class="about-short">

                            <div class="xx-9">

                                <div class="images">
                                    <div class="img1">
                                        <img src="{{ asset('img/Rectangle 5.png') }}" alt="">
                                    </div>
                                    <div class="img2">
                                        <img src="{{ asset('img/Rectangle 4.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="cource_facts">
                                    <ul>
                                        <li class="mb-4"><span class="theme-cl">{{ $count_courses }}</span>
                                            <h5 class="text1">{{ __('Active Courses') }}</h5>
                                            {{-- <p class="pra"> {!! app()->getLocale() == 'en' ? setting('about.Active_Courses_p_en') : setting('about.Active_Courses_p_ar') !!}</p> --}}
                                        </li>
                                        <li><span class="theme-cl">{{ $count_users }}</span>
                                            <h5 class="text1">{{ __('Student Learning') }}</h5>
                                            {{-- <p class="pra"> {!! app()->getLocale() == 'en' ? setting('about.Student_Learning_p_en') : setting('about.Student_Learning_p_ar') !!} </p> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>

        </section>
    </div>
    </div>
    {{-- ======================================================Services===================================================== --}}

    <div class="parent2">
        <section class="parent1">
            <div class="xx-10">
                <div class="text-center pt-2">
                    {{-- <p style="color: #7F56D9">Explore Services</p> --}}
                    <h2 class="data"> {!! app()->getLocale() == 'en'
                        ? setting('about.Explore_Services_title_en')
                        : setting('about.Explore_Services_title_ar') !!}</h2>

                </div>
                <div class=" d-flex pt-3 w-50 m-auto justify-content-center">
                    <span class="pra2">@lang('Educhains')</span>
                </div>

                <div class="pt-5 bxx-11 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="xx-11">
                                    <div class="_wrk_prc_wrap p-3">
                                        <div class="_wrk_prc_caption">
                                            <h3 class="pb-3">{{ __('Vision') }}</h3>
                                            <p style="font-size: 18px">
                                                @lang('“To envisions a world where young people can reach their full potential through education and training.”')
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="xx-11">
                                    <div class="_wrk_prc_wrap p-3">
                                        <div class="_wrk_prc_caption">
                                            <h3 class="pb-3">{{ __('Mission') }}</h3>
                                            <p style="font-size: 18px">
                                                @lang('“EduChains empowers young people to achieve their full potential by providing them with access to high-quality educational and training programs that are tailored to their needs. We strive to provide an educational and training environment that encourages continuous learning and enables young people to build a promising and bright professional future.”')
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="xx-11">
                                    <div class="_wrk_prc_wrap p-3">
                                        <div class="_wrk_prc_caption">
                                            <h3 class="pb-3">{{ __('Core Values') }}</h3>
                                            <p style="font-size: 18px;line-height:22.4px">
                                                @lang('Continuous Learning')
                                            </p>
                                            <p>@lang('Excellence')</p>
                                            <p>@lang('Cooperation')</p>
                                            <p>@lang('Personal Development')</p>
                                            <p>@lang('Positive Impact')</p>
                                            <p>@lang('Innovation')</p>
                                            <p>@lang('Contribution To Success')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
        </section>
    </div>
    <div class="about-us dark-mode pb-5">
        <div class="container">
            <div class="pt-5">
                <p class="Y2IQFc about ">{{ __('Who We Are?') }}</p>
            </div>
            <div class="content">
                <div class="header-text  mb-4">
                    <p class="pras">@lang('About us')</p>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <p class="text2">
                            @lang('EduChains is a leading provider of innovative educational and training solutions that aim to achieve excellence in skill development and empower young people to achieve their full potential. Founded with a clear vision to provide a distinguished and stimulating educational experience that helps young people grow personally and professionally,')
                        </p>
                        <p class="text2">@lang('EduChains is an innovative educational and training initiative that aims to empower young people to acquire the skills and knowledge necessary to enter the labor market and succeed in it. This platform is considered a comprehensive educational environment that combines specialized educational content with practical training, which enables young people to develop their personal and professional skills and achieve excellence in various fields.')</p>
                    </div>
                    <div class="col-lg-7 d-flex justify-content-center">
                        <img style="width:100%" src="{{ asset('img/1.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="meet dark-mode" style="display:none">
        <div class="container">
            <div class="ax">
                <div class="xx-7">
                    <p class="Y2IQFc about">{{ __('Meet Instructors') }}</p>
                </div>
                <div class="content">
                    <div class="header-text">
                        <p class="pras">Instructors</p>
                    </div>
                    <div class="body-content aa-1">
                        <div class="informations2">
                            <p class="dark-mode">
                                “I love that it has omegas in it but they are plant-based.”
                            </p>
                            <div class="zx-1">
                                <h4 class="dark-mode">Erica Chidi Cohen</h4>
                                <p class="dark-mode">Health Educator</p>
                            </div>
                        </div>
                        <div class="x2">
                            <div class="video">
                                <img src="{{ asset('img/& Video.png') }}" alt="">
                            </div>
                            <div class="actions">
                                <div class="right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="22"
                                        viewBox="0 0 32 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.1294 1.30256L0.40168 10.0303C-0.133892 10.5659 -0.133892 11.4342 0.40168 11.9698L9.1294 20.6975C9.66498 21.2331 10.5333 21.2331 11.0689 20.6975C11.6045 20.1619 11.6045 19.2936 11.0689 18.758L4.68235 12.3715H30.6286C31.386 12.3715 32 11.7574 32 11C32 10.2426 31.386 9.6286 30.6286 9.6286H4.68235L11.0689 3.24205C11.6045 2.70648 11.6045 1.83814 11.0689 1.30256C10.5333 0.766985 9.66498 0.766985 9.1294 1.30256Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <div class="left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="22"
                                        viewBox="0 0 32 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.8706 1.30256L31.5983 10.0303C32.1339 10.5659 32.1339 11.4342 31.5983 11.9698L22.8706 20.6975C22.335 21.2331 21.4667 21.2331 20.9311 20.6975C20.3955 20.1619 20.3955 19.2936 20.9311 18.758L27.3176 12.3715H1.37143C0.614009 12.3715 0 11.7574 0 11C0 10.2426 0.614009 9.6286 1.37143 9.6286H27.3176L20.9311 3.24205C20.3955 2.70648 20.3955 1.83814 20.9311 1.30256C21.4667 0.766985 22.335 0.766985 22.8706 1.30256Z"
                                            fill="black" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    {{-- ======================================================= script slider ======================================================= --}}
    <script src="https://fastly.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
            }
        });
    </script>
@endsection
