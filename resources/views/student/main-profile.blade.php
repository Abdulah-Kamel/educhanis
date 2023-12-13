@extends('layouts.app')

@section('content')

    <div class="imges" style="display:none">

        <!-- Onclick Sidebar -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div id="filter-sidebar" class="filter-sidebar">
                    <div class="filt-head">
                        <h4 class="filt-first">{{ __('Cart products') }}</h4>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">{{ __('Close') }} <i
                                class="ti-close"></i></a>
                    </div>


                    @auth
                        <div class="show-hide-sidebar">

                            <!-- Find New Property -->
                            <div class="sidebar-widgets">

                                <!-- Search Form -->

                                {{--                        <input class="form-control" name="search" type="search" --}}
                                {{--                               placeholder="{{ __('Search keyword') }} ..." aria-label="Search"> --}}

                                <div class="clearfix"></div>
                                <br>

                                <ul class="no-ul-list mb-3">
                                    @if (auth()->user()->items != [])
                                        @forelse(auth()->user()->items ?? [] as $item)
                                            <li>
                                                <div class="col-md-12">

                                                    <a href="{{ route('singleProduct', $item->product->slug) }}">
                                                        <img style="width: 50px"
                                                            src="{{ Storage::disk('public')->url($item->product->image ?? '') }}">
                                                    </a>
                                                    &nbsp;
                                                    <a href="{{ route('singleProduct', $item->product->slug) }}">
                                                        {{ $item->product->getTranslatedAttribute('name') }}
                                                    </a>

                                                    ({{ $item->qty }} X {{ $item->product->price }})
                                                    <br>

                                                    <a href="#"
                                                        onclick="event.preventDefault(); document.getElementById('remove-item{{ $item->id }}').submit();">
                                                        <p style="color : #1030e5"> <i class="fa fa-trash "></i>
                                                            {{ __('Remove') }}</p>
                                                    </a>

                                                    <form id="remove-item{{ $item->id }}"
                                                        action="{{ route('removeItemFromCart') }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                                                    </form>

                                                </div>
                                            </li>
                                            <hr>

                                        @empty
                                            <p> {{ __('No items in your cart') }} </p>
                                        @endforelse
                                    @else
                                        <p> {{ __('No items in your cart') }} </p>
                                    @endif

                                    <h4> {{ __('Total') }} :
                                        {{ auth()->user()->items? auth()->user()->items->sum('final_price'): 0 }}
                                        {{ __('OMR') }}</h4>
                                </ul>
                                <br>



                                @if (auth()->user()->items->count() > 0)
                                    <a href="{{ url('checkout') }}"
                                        class="btn btn-theme full-width mb-2">{{ __('Proceed To Checkout') }}</a>
                                @else
                                    <a href="{{ url('shop') }}"
                                        class="btn btn-theme full-width mb-2">{{ __('Shop now') }}</a>
                                @endif
                            </div>

                        </div>
                    @endauth
                </div>
            </div>
        </div>

        <div class="headline py-3">
            <div class="container">
                <div class="row d-flex justify-content-between">

                    <div class="col-sm-12 col-lg-8 mb-4 m-lg-0 align-popular">
                        <span class="text-uppercase title">popular:</span>
                        <a href="#" class="popular-links">Business</a>
                        <a href="#" class="popular-links">computer Science</a>
                        <a href="#" class="popular-links">data Science</a>
                        <a href="#" class="popular-links">c##</a>
                    </div>
                    <div class="col-sm-12 col-lg-4  mb-sm-3 m-0">
                        <form method="get" action="{{ route('searchCourse') }}" class="d-inline">

                            <div class="search-box">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="text" class="search-input w-100" placeholder="What Do You Want To Learn"
                                    name="search">
                                <button class="search-btn">Get Start</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="profile-banner py-4">
        <h3 class="text-center">profile</h3>
        <div class="profile-img">
            <img class="img-fluid rounded-circle"
                src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : '' }}" alt="">
            {{-- <img class="img-fluid rounded-circle" src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" alt=""> --}}
        </div>
    </div>

    <div class="profile-info dark-mode">
        <div class="container">
            <div class="inner">
                <h3 class="text-center font-weight-bold user-name">{{ auth()->user()->name }}</h3>
                <h3 class="text-center font-weight-normal user-role">Your role will be here</h3>
            </div>

        </div>
    </div>

    <div class="contact-info pb-5 dark-mode">
        <div class="container">
            <div class="inner py-4">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-center m-0 h5 pb-lg-0 pb-3"><i class="fa-solid fa-phone mr-2"></i>Tel :
                            {{ auth()->user()->telephone ? auth()->user()->telephone : 'No Telephone' }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-center m-0 h5 pb-lg-0 pb-3"><i class="fa-solid fa-location-dot mr-2"></i>Location :
                            369
                            258 147</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-center m-0 h5"><i class="fa-regular fa-envelope mr-2"></i>Email :
                            {{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 dark-mode">
        <a href="{{ route('my_dashboard') }}" class="btn-edu d-block m-auto">Edit Profile</a>
    </div>

    <h3 class="py-5 dark-mode m-0">
        <div class="container">
            <div class="xx-7">
                <span class="Y2IQFc about" lang="en">
                    Your Courses
                </span>
            </div>
        </div>

    </h3>

    <div class="m-2 m-auto dark-mode pb-5">
        <div style="" class="active all-slide m-0 pt-3">
            <div class="body dark-mode">

                <div class="container">
                    <div class="swiper mySwiper">
                        <div id="courses" class="swiper-wrapper">
                            @foreach ($user_courses as $course)
                                <div class="swiper-slide ght dark-mode">
                                    <div class=" cardd  {{ $course->Course->category->name }} ">
                                        <div class=" item style_cured     ">
                                            <div class="was">
                                                <a
                                                    href="@if (!isset(auth()->user()->id)) {{ url('login') }} @elseif($course->Course->price == 0){{ route('join', $course->Course->slug) }} @else {{ route('payment', $course->Course->slug) }} @endif">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6 6C6 4.89543 6.89543 4 8 4H16C17.1046 4 18 4.89543 18 6V21L12 15L6 21V6Z"
                                                            stroke="#D79330" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                        viewBox="0 0 39 39" fill="none">

                                                        <circle cx="19.5" cy="19.5" r="19.5"
                                                            fill="white" />


                                                    </svg>
                                                </a>
                                            </div>
                                            <a class="imgs"
                                                href="{{ route('course_details', $course->Course->slug) }}">
                                                <div class="items-curd ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6 6C6 4.89543 6.89543 4 8 4H16C17.1046 4 18 4.89543 18 6V21L12 15L6 21V6Z"
                                                            stroke="#D79330" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                        viewBox="0 0 39 39" fill="none">



                                                        <circle cx="19.5" cy="19.5" r="19.5"
                                                            fill="white" />


                                                    </svg>
                                                    <img width="100%" height="250px"
                                                        src="{{ asset($course->Course->image) }}" alt="">

                                                </div>
                                                <div class="items-dec">
                                                    <span class="title-card">
                                                        Design
                                                    </span>
                                                    <div class="body-card">
                                                        <div class="course-price">
                                                            <div class="price">${{ $course->Course->price }} </div>
                                                        </div>
                                                        <div class="cards">
                                                            <h4 value=' '
                                                                class=" p-0  items_dec_h4 d-inline-block text-truncate"
                                                                style="max-width: 220px;">
                                                                {{ $course->Course->getTranslatedAttribute('title') }}</h4>
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
                                                                    stroke="black" stroke-opacity="0.5" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
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
                                                        @if ($course->Course->trainer)
                                                            <div class="   align-items-center  d-flex col-md-6">
                                                                @if ($course->Course->trainer->image)
                                                                    <img style="width: 40px;      height: 40px; "
                                                                        class="rounded-circle  "
                                                                        src="{{ Storage::disk('public')->url($course->Course->trainer->image) }}"
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
                                                                        {{ $course->Course->trainer->getTranslatedAttribute('name') }}
                                                                    </h4>

                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <h3 class="py-5 m-0 dark-mode">
        <div class="container">
            <div class="xx-7">
                <span class="Y2IQFc about" lang="en">
                    Your Wishing List
                </span>
            </div>
        </div>
    </h3> --}}

    {{-- <div class="m-2 m-auto dark-mode pb-5">
        <div style="" class="active all-slide m-0 pt-3 dark-mode">
            <div class="body dark-mode">

                <div class="container">

                    <div class="swiper mySwiper ">
                        <div id="courses" class="swiper-wrapper">
                            @foreach ($user_courses as $course)
                                <div class="swiper-slide ght dark-mode">
                                    <div class=" cardd  {{ $course->category->name }} ">
                                        <div class=" item style_cured     ">
                                            <div class="was">
                                                <a
                                                    href="@if (!isset(auth()->user()->id)) {{ url('login') }} @elseif($course->price == 0){{ route('join', $course->slug) }} @else {{ route('payment', $course->slug) }} @endif">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6 6C6 4.89543 6.89543 4 8 4H16C17.1046 4 18 4.89543 18 6V21L12 15L6 21V6Z"
                                                            stroke="#D79330" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                        viewBox="0 0 39 39" fill="none">

                                                        <circle cx="19.5" cy="19.5" r="19.5"
                                                            fill="white" />


                                                    </svg>
                                                </a>
                                            </div>
                                            <a class="imgs" href="{{ route('course_details', $course->slug) }}">
                                                <div class="items-curd ">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6 6C6 4.89543 6.89543 4 8 4H16C17.1046 4 18 4.89543 18 6V21L12 15L6 21V6Z"
                                                            stroke="#D79330" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                        viewBox="0 0 39 39" fill="none">


                                                        <circle cx="19.5" cy="19.5" r="19.5"
                                                            fill="white" />


                                                    </svg>
                                                    <img width="100%" height="250px" src="{{ asset($course->image) }}"
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
                                                                {{ $course->getTranslatedAttribute('title') }}</h4>
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
                                                                    stroke="black" stroke-opacity="0.5" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
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
                                                                        {{ $course->trainer->getTranslatedAttribute('name') }}
                                                                    </h4>

                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

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
