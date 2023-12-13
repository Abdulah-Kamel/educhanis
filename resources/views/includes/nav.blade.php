<div class="imges">
    <div class="header header-light">
        <div class="container">
            <div class="qw3">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="{{ route('home') }}">

                            <img src="{{ asset('img/نُمْكِنكُ مِنْ بِنَاءِ مُسْتَقْبَلِكَ.png') }}" width="120"
                                alt="">


                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper xrl" style="transition-property: none">
                        <ul class="nav-menu">
                            <li class="@if (\Route::currentRouteName() == 'courses') active @endif">
                                <a href="{{ url('courses') }}">{{ __('Courses') }}<span
                                        class="submenu-indicator"></span></a>
                            </li>

                            <li class="@if (\Route::currentRouteName() == 'about') active @endif">
                                <a href="{{ route('about') }}">{{ __('About us') }}<span
                                        class="submenu-indicator"></span></a>
                            </li>


                            <li class="@if (\Route::currentRouteName() == 'get-contact') active @endif">
                                <a href="{{ route('get-contact') }}">{{ __('Contact us') }}</a>
                            </li>
                        </ul>

                        <ul class="nav-menu  ">

                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">
                            <div class="wed">

                                @auth
                                    <li>
                                        <a style=" padding-right: 10px;  font-size:12px;" href="javascript:void(0)"
                                            onclick="openNav()" id="open2"> <span class=""> (
                                                {{ auth()->user()->items->count() ?? 0 }} ) </span>
                                            <i style=" font-size:18px;" class="bi bi-cart-dash-fill"></i><span
                                                class="submenu-indicator"></span></a>
                                    </li>
                                @endauth
                                <div class="theme-options">
                                    <button class="light">

                                        <i class="fa-solid fa-sun"></i>
                                    </button>
                                    <button class="dark">
                                        <i class="fa-solid fa-moon"></i>
                                    </button>
                                </div>
                                <li class="btn btn-sm" style="font-size:18px; padding:0;">
                                    @if (app()->getLocale() != 'en')
                                        <div class="en">
                                            <span class="right"></span>
                                            <a href="{{ route('lang', 'en') }}"><span class="one"> &nbsp;
                                                    {{ __('Eng') }}</span></a>
                                        </div>
                                    @else
                                        <div class="ar">
                                            <span class="left"></span>
                                            <a href="{{ route('lang', 'ar') }}"><span class="one"> &nbsp;
                                                    {{ __('AR') }}</span></a>
                                        </div>
                                    @endif
                                </li>
                                @auth

                                    <div class="notifications ">
                                        @if (auth()->user()->unreadNotifications->count() > 0)
                                            <span class="count">{{ auth()->user()->unreadNotifications->count() }}</span>
                                        @endif
                                        <i class="fa-solid fa-bell"></i>
                                        <div class="za">
                                            <div class="container">
                                                <div class="not-content">

                                                    <div class="headers">
                                                        <h3>Notifications
                                                            <span>{{ auth()->user()->unreadNotifications->count() > 0? '(' .auth()->user()->unreadNotifications->count() .')': '' }}</span>
                                                        </h3>
                                                        {{-- <a href="{{ route('readAsAll') }}" class="mark fw-bold">Read --}}
                                                        {{-- All</a> --}}
                                                    </div>
                                                    <div class="not-content1"
                                                        style="overflow: {{ auth()->user()->unreadNotifications->count() > 2? 'auto': '' }}">

                                                        @foreach (auth()->user()->unreadNotifications as $Notifications)
                                                            <a class="body1"
                                                                href="{{ route('course_details2', $Notifications->data['course_id']) }}">
                                                                <div class="body">
                                                                    <div class="row m-0">
                                                                        <div class="col-lg-3 col-md-3 col-3 images-not">
                                                                            <img src="{{ $Notifications->data['course_image'] }}"
                                                                                width="50" height="50"
                                                                                class=" rounded-circle" alt="">
                                                                        </div>
                                                                        <div class="col-lg-8 col-sm-8 col-8 p-0">
                                                                            <span class="user-name mb-1">Welcome
                                                                                {{ auth()->user()->name }}</span>
                                                                            <span class="course-title">
                                                                                Course Name:
                                                                                {{ $Notifications->data['course_title'] }}</span>
                                                                            <p class="user-msg">
                                                                                {{ $Notifications->data['massage'] }}:
                                                                                <span
                                                                                    class="trainer_name">{{ $Notifications->data['trainer_name'] }}</span>
                                                                            </p>
                                                                            <small
                                                                                class="date">{{ $Notifications->created_at }}</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endauth

                            </div>

                            @guest
                                <div class="guest">

                                    <li class="xx-1">
                                        <a href="{{ route('login') }}">{{ __('Sign in') }}</a>
                                    </li>
                                    <li class="xx-2">
                                        <a href="{{ route('register') }}">{{ __('Sign up') }}</a>
                                    </li>
                                </div>
                            @endguest
                            @auth
                                <li class="oopo">
                                    <a class="kjjj" href="#">
                                        @if (auth()->user()->avatar)
                                        @endif &nbsp
                                        {{ auth()->user()->name }}<span class="submenu-indicator"></span>
                                    </a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li class="">
                                            <a href="{{ route('mainProfile') }}"> <i class="fa-solid fa-house"></i> &nbsp
                                                {{ __('My Profile') }}<span class="submenu-indicator"></span>
                                            </a>
                                        <li>
                                            <a href="{{ route('my_dashboard.courses') }}"><i
                                                    class="fa-solid fa-book-open"></i> &nbsp
                                                {{ __('My courses') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('favCourses') }}"> <i class="fa-solid fa-heart"></i> &nbsp
                                                {{ __('Favourite Courses') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('myDashboardOrders') }}"> <i
                                                    class="fa fa-money-bill-wave"></i>
                                                &nbsp
                                                {{ __('My orders') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('catItems') }}"> <i class="fa fa-shopping-bag"></i> &nbsp
                                                {{ __('My cart') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('wishlist') }}"> <i class="fa-solid fa-heart"></i> &nbsp
                                                {{ __('Wishlist') }}</a>
                                        </li>
                                        <li class="login_click">
                                            <a href="{{ url('/logout') }} "
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out-alt"></i> &nbsp {{ __('Logout') }}</a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                            @endauth

                    </div>
                </nav>
            </div>
        </div>
    </div>


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

</div>
<script>
    function openNav() {
        document.getElementById("filter-sidebar").style.width = "320px";
    }

    function closeNav() {
        document.getElementById("filter-sidebar").style.width = "0";
    }
</script>
