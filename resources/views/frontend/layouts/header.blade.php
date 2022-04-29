<!DOCTYPE html>
<html lang="en">

<!-- dream-property/index.html  18 Nov 2019 05:01:32 GMT -->

<head>
    <meta charset="utf-8">
    <title>Twilight Camping</title>
    <!-- Stylesheets -->
    <link href="{{ url('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/responsive.css') }}" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{ url('frontend/css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('frontend/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('frontend/images/logo.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">


        <header class="main-header">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <div class="top-left clearfix">
                        <ul class="list">
                            <li><span class="icon fas fa-envelope"></span> Twilight Camps Cafe Kasol</li>
                            <li><span class="icon fas fa-phone"></span> <a href="tel:+918219615617"> 918219615617</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <div class="login-register">
                            <a href="{{ route('frontend.login') }}">Login</a>
                            <a href="{{ route('frontend.register') }}">Register </a>
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-google"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container">
                    <div class="auto-container clearfix">
                        <!--Info-->
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('frontend.home') }}"><img
                                        src="{{ url('frontend/images/logo.png') }}" alt="" title="" style="height: 70px;"></a></div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Togg le Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{ request()->is('/') ? 'current' : '' }}"><a
                                                href="{{ route('frontend.home') }}">Home</a>
                                        </li>
                                        <li class="{{ request()->is('about') ? 'current' : '' }}"><a
                                                href="{{ route('frontend.about') }}">About us</a>
                                        </li>
                                        <li class="{{ request()->is('gallery') ? 'current' : '' }}"><a
                                                href="{{ route('frontend.gallery') }}">Gallery</a></li>
                                        <li class="{{ request()->is('faq') ? 'current' : '' }}"><a
                                                href="{{ route('frontend.faq') }}">Faq</a></li>
                                        <li class="{{ request()->is('tent') ? 'current' : '' }}"><a
                                                href="{{ route('tent') }}">Tent</a>
                                        </li>
                                        <li class="{{ request()->is('contact-us') ? 'current' : '' }}"><a
                                                href="{{ route('frontend.contact') }}">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!-- Search Btn -->
                                <div class="search-box-btn"><span class="icon flaticon-search"></span></div>
                                <!-- Button Box -->
                                <div class="btn-box">
                                    <a href="{{url('/checkout')}}" class="theme-btn btn-style-one"><span
                                            class="txt">Book now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="{{ route('frontend.home') }}" class="img-responsive"><img src="{{ url('frontend/images/logo.png') }}"
                                alt="" title="" style="height: 70px;"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon far fa-window-close"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route('frontend.home') }}"><img
                                src="{{ url('frontend/images/nav-logo.png') }}" alt="" title=""></a></div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
