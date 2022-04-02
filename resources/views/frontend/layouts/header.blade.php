<!DOCTYPE html>
<html lang="en">

<!-- dream-property/index.html  18 Nov 2019 05:01:32 GMT -->
<head>
<meta charset="utf-8">
<title>Twilight Camping</title>
<!-- Stylesheets -->
<link href="{{url('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ url('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{ url('frontend/css/responsive.css')}}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ url('frontend/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{ url('frontend/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ url('frontend/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
     <!-- Preloader -->
     <div class="preloader"></div>

    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <ul class="list">
						<li><span class="icon fas fa-envelope"></span> Twilight Camps Cafe Kasol</li>
						<li><span class="icon fas fa-phone"></span> <a href="tel:+918219615617"> 918219615617</a></li>
					</ul>
                </div>
                <div class="top-right clearfix">
					<div class="login-register">
						<a href="{{ route('frontend.login')}}">Login</a>
						<a href="{{ route('frontend.register')}}">Register </a>
					</div>
                    <ul class="social-icons">
						<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fab fa-google"></span></a></li>
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-skype"></span></a></li>
						<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
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
                    <div class="logo"><a href="{{ route('frontend.home')}}"><img src="{{ url('frontend/images/logo.png')}}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix">
                                <ul class="navigation clearfix">
                                <li class="current"><a href="{{ route('frontend.home')}}">Home</a>
                                    </li>
									<li class="dropdown"><a href="#">About us</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown has-mega-menu"><a href="#"><span data-hover="Pages">Pages</span></a>
										<div class="mega-menu">
											<div class="mega-menu-bar row clearfix">
												<div class="column col-md-3 col-xs-12">
													<h3>About Us</h3>
													<ul>
														<li><a href="about.html">About Us</a></li>
														<li><a href="faq.html">Faq</a></li>
														<li><a href="take-tour.html">Take Tour</a></li>
														<li><a href="video-tour.html">Video Tour</a></li>
														<li><a href="gallery.html">Gallery</a></li>
														<li><a href="comming-soon.html">Comming Soon</a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>Properties</h3>
													<ul>
														<li><a href="properties.html">Properties</a></li>
														<li><a href="dashboard.html">Dashboard</a></li>
														<li><a href="submit-property.html">Submit Property</a></li>
														<li><a href="properties-list-view.html">Properties List View</a></li>
														<li><a href="properties-grid-view.html">Properties Grid View</a></li>
														<li><a href="properties-classic-view.html">Properties Classic View</a></li>
														<li><a href="properties-detail.html">Properties Detail</a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>Blog</h3>
													<ul>
														<li><a href="blog.html">Our Blog</a></li>
														<li><a href="blog-list.html">Blog List</a></li>
														<li><a href="blog-classic.html">Blog Classic</a></li>
														<li><a href="blog-detail.html">Blog Detail</a></li>
														<li><a href="not-found.html">Not Found</a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>Shops</h3>
												</div>
											</div>
										</div>
                                    </li>
                                <li><a href="{{ route('tent')}}">Tent</a>
                                    </li>
                                <li><a href="{{ route('frontend.contact')}}">Contact us</a>
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
                                <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Book now</span></a>
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
                	<a href="index-2.html" class="img-responsive"><img src="{{ url('frontend/images/logo-small.png')}}" alt="" title=""></a>
                </div>

				<!--Right Col-->
                <div class="right-col pull-right">
					<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
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
            <div class="nav-logo"><a href="{{ route('frontend.home')}}"><img src="{{ url('frontend/images/nav-logo.png')}}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
