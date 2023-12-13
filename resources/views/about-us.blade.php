@extends('layouts.app')
@section('page_title', __('Who We Are?'))
@section('page_info', __('About us'))
@section('content')

    @include('includes.breadcrumb')
    <!-- ============================ Page Title End ================================== -->

    <!-- ========================== About Facts List Section =============================== -->
    <section class="pt-0">
        <div class="container">

            <div class=" align-items-center">

                <section class="about-us pb-5">
                    <div class="Platform pb-5">
                        <div class="title text-center p-5">
                            <h2>@lang('About the Platform')</h2>
                        </div>
                        <div class="platform-content">
                            <div class="platform-text">
                                <p>
                                    @lang('EduChains is a leading provider of innovative educational and training solutions that aim to achieve excellence in skill development and empower young people to achieve their full potential. Founded with a clear vision to provide a distinguished and stimulating educational experience that helps young people grow personally and professionally,')
                                </p>
                                <p>@lang('EduChains is an innovative educational and training initiative that aims to empower young people to acquire the skills and knowledge necessary to enter the labor market and succeed in it. This platform is considered a comprehensive educational environment that combines specialized educational content with practical training, which enables young people to develop their personal and professional skills and achieve excellence in various fields.')</p>
                                <p>@lang('EduChains also provides professional training and workshops, which are essential elements in the journey of skill development and performance improvement in multiple fields. These two processes are related to providing individuals with the knowledge and skills necessary to succeed in the competitive labor market.')</p>
                            </div>
                            <div class="platform-img">
                                <img src="{{ asset('img/1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="offer mb-5">
                        <div class="title text-center p-5">
                            <h2>@lang('What We Offer')</h2>
                        </div>
                        <div class="offer-content">
                            <div class="offter-text">
                                <h3>@lang('Variety Of Educational Programs')</h3>
                                <p>@lang('We offer a variety of courses, workshops, and training in different fields, starting from academic specializations to modern practical and professional skills that the labor market needs inside and outside Egypt.')</p>
                                <h3>@lang('Interactive Educational Experience')</h3>
                                <p>@lang('We believe that the best learning comes from interactive educational experiences, so we offer rich and exciting content that includes live and indirect lectures and interactive materials.')</p>
                                <h3>@lang('Expert And Professional Trainers')</h3>
                                <p>@lang('We collaborate with a team of expert and professional trainers who combine academic knowledge with practical and professional experience to ensure the provision of high-quality content and increase job opportunities.')</p>
                                <h3>@lang('A Space For Communication And Sharing')</h3>
                                <p>@lang('We provide an interactive environment that enables subscribers to communicate and interact with each other and with trainers, which contributes to the exchange of knowledge and experience.')</p>
                            </div>
                        </div>
                    </div>

                    <div class="unique mb-5">
                        <div class="title text-center p-5">
                            <h2>@lang('Why We Are Unique')</h2>
                        </div>
                        <div class="unique-content">
                            <div class="unique-text">
                                <h3>@lang('Customization Of Programs')</h3>
                                <p>@lang('We offer customized programs according to the individual\'s needs, whether it is to improve current skills or acquire new skills.')</p>
                                <h3>@lang('The Balance Between Theoretical and Practical')</h3>
                                <p>@lang('We always strive to achieve a perfect balance between theoretical content and practical application to give subscribers a deep understanding and immediate practical skills.')</p>
                                <h3>@lang('Sustainable Learning')</h3>
                                <p>@lang('We are interested in promoting sustainable learning as we help individuals continue developing their skills after the end of the programs through resources, guidance, and training.')</p>
                            </div>
                            <div class="unique-img">
                                <img src="{{ asset('img/2.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="mission mb-5">
                        <div class="title text-center p-5">
                            <h2>@lang('Our Mission')</h2>
                        </div>
                        <div class="mission-content">
                            <div class="mission-text">
                                <p>@lang('“EduChains empowers young people to achieve their full potential by providing them with access to high-quality educational and training programs that are tailored to their needs. We strive to provide an educational and training environment that encourages continuous learning and enables young people to build a promising and bright professional future.”')</p>
                            </div>
                            <div class="mission-img" style="margin-right:15px">
                                <img src="{{ asset('img/3.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="vision mb-5">
                        <div class="title text-center p-5">
                            <h2>@lang('Our Vision')</h2>
                        </div>
                        <div class="vision-content">
                            <div class="vision-text text-center">
                                <p>@lang('“To envisions a world where young people can reach their full potential through education and training.”')</p>
                            </div>
                        </div>
                    </div>

                    <div class="values">
                        <div class="title text-center p-5">
                            <h2>@lang('Our Values')</h2>
                        </div>
                        <div class="values-content">
                            <div class="values-text">
                                <h3>@lang('Continuous Learning')</h3>
                                <p>@lang('We believe in the importance of continuous learning as the basis for personal and professional development.')</p>
                                <h3>@lang('Excellence')</h3>
                                <p>@lang('We always strive to provide a distinguished educational and training experience that meets the aspirations and needs of young people.')</p>
                                <h3>@lang('Cooperation')</h3>
                                <p>@lang('We work as an integrated team and encourage cooperation and participation between young people, trainers, experts, and companies in the labor market.')</p>
                                <h3>@lang('Personal Development')</h3>
                                <p>@lang('We strive to promote the personal development of young people and empower them to achieve their personal and professional goals.')</p>
                                <h3>@lang('Positive Impact')</h3>
                                <p>@lang('We aim to create a positive impact on the lives of young people by empowering and inspiring them to achieve their full potential and obtain the best job opportunities that suit their abilities.')</p>
                                <h3>@lang('Innovation')</h3>
                                <p>@lang('We encourage creative thinking and the development of new solutions that contribute to improving the performance of companies and individuals.')</p>
                                <h3>@lang('Contribution To Success')</h3>
                                <p>@lang('We strive to be an essential part of the success of the companies that we cooperate with by empowering and developing young people and recent graduates and preparing them for work.')</p>
                            </div>
                        </div>
                    </div>
                </section>



                <a href="#" class="btn btn-modern d-none"><span class="lx">{{ __('Know More') }}</span> <span
                        class="xa"><i
                            class="@if (app()->getLocale() == 'en') fa fa-arrow-right @else fa fa-arrow-left @endif"></i></span></a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                <div class="list_facts_wrap_img">

                    <iframe src="{{ setting('about.video') }}" width="100%" height="400px" frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>


                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- ========================== About Facts List Section =============================== -->

    <!-- ============================ Featured Instructor Start ================================== -->
    <section class="bg-light dark-mode d-none">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="sec-heading center pt-5">
                        <p>{{ __('Meet Instructors') }}</p>
                        <h2 class="dark-mode"><span class="theme-cl"></span> {{ __('Instructors') }} </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="four_slide-dots articles arrow_middle">
                        <!-- Single Slide -->
                        @forelse($trainers as $trainer)
                            <div class="singles_items">
                                <div class="instructor_wrap">
                                    <div class="instructor_thumb">
                                        <a href="{{ route('instructor', $trainer->slug) }}"><img
                                                src="{{ Storage::disk('public')->url($trainer->image) }}" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="instructor_caption">
                                        <h4><a
                                                href="{{ route('instructor', $trainer->slug) }}">{{ $trainer->getTranslatedAttribute('name') }}</a>
                                        </h4>
                                        <span>{{ $trainer->getTranslatedAttribute('job') }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{ __('No Instructors Yet') }}
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Featured Instructor End ================================== -->
@endsection
