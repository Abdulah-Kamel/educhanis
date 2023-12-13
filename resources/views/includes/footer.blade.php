<!-- ============================ Footer Start ================================== -->
<footer class="dark-footer skin-dark-footer py-5" style="background: #4F4E4E">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h4 class="widget-title">{{ __('Navigations') }}</h4>
                    <ul class="footer-menu">
                        <li><a href="{{ route('about') }}">{{ __('About us') }}</a></li>
                        <li><a href="{{ route('faqs') }}">{{ __('F&Qs') }}</a></li>
                        <li class="d-none"><a href="{{ route('shop') }}">{{ __('Shop') }}</a></li>
                        <li><a href="{{ route('get-contact') }}">{{ __('Contact us') }}</a></li>
                        <li><a href="{{ route('news') }}">{{ __('News') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3" style="display:none">
                <div class="footer-widget">
                    <h4 class="widget-title">{{ __('Shop Categories') }}</h4>
                    <ul class="footer-menu">
                        @forelse(\App\PCategory::take(5)->inRandomOrder()->get() as $category)
                            <li><a
                                    href="{{ route('shop', $category->slug) }}">{{ $category->getTranslatedAttribute('name') }}</a>
                            </li>

                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h4 class="widget-title">{{ __('Courses') }}</h4>
                    <ul class="footer-menu">
                        @forelse(\App\Course::orderBy('created_at','desc')->take(5)->get() as $category)
                            <li><a
                                    href="{{ route('course_details', $category->slug) }}">{{ $category->getTranslatedAttribute('title') }}</a>
                            </li>


                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h4 class="widget-title">{{ __('Contact us') }}</h4>
                    <div class="footer-add">
                        <p> {{ app()->getLocale() == 'en' ? setting('site.addres_en') : setting('site.address_ar') }}
                        </p>
                        <p>{{ setting('site.phone') }}</p>
                        <p>{{ setting('site.email') }}</p>
                    </div>
                    {{-- <a href="tel:{{ setting('site.phone') }}" class="other-store-link">
                    <div class="other-store-app">
                        <div class="os-app-icon">
                            <i class="lni-phone theme-cl"></i>
                        </div>
                        <div class="os-app-caps">
                            {{ __('Give us a call') }}
                        </div>
                    </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone={{ setting('site.whatsapp') }}&text="
                    class="other-store-link">
                    <div class="other-store-app">
                        <div class="os-app-icon">
                            <i style="color: green" class="lni-whatsapp theme-cl"></i>
                        </div>
                        <div class="os-app-caps">
                            {{ __('WhatsApp') }}
                        </div>
                    </div>
                </a> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
