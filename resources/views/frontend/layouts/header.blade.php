
<!DOCTYPE html>
<html>

<head>

        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Properties -->
        <title>Twilight  Camping</title>
        <link rel="shortcut icon" href="{{ url('frontend/images/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="{{url('frontend/images/apple-touch-icon.png')}}">

        <!-- Google Fonts -->
       	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
       	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{url('frontend/css/uikit.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/css/tiny-date-picker.min.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" />
        <link rel="stylesheet" href="{{url('frontend/css/media-query.css')}}" />

    </head>

    <body class="impx-body" id="top">

    	<!-- HEADER -->
		<header id="impx-header">
			<div>
				<div class="impx-menu-wrapper">

					<!-- Mobile Nav Start -->
					<div id="mobile-nav" data-uk-offcanvas="mode: push; overlay: true">
				        <div class="uk-offcanvas-bar">

				            <ul class="uk-nav uk-nav-default">
				                <li @if (url()->current() == route('name.home')) class="uk-parent uk-active" @endif>
				                	<a href="{{ route('name.home')}}">Home</a>
				                </li>

                                <li @if (url()->current() == route('name.about')) class="uk-parent uk-active" @endif>
									<a href="{{ route('name.about')}}">About Us</a>
								</li>
                                <li @if (url()->current() == route('name.gallery')) class="uk-parent uk-active" @endif>
									<a href="{{ route('name.gallery')}}">Gallery</a>
								</li>
                                <li @if (url()->current() == route('name.testimonial')) class="uk-parent uk-active" @endif>
									<a href="{{ route('name.testimonial')}}">Testimonial</a>
								</li>
                                <li @if (url()->current() == route('name.contact')) class="uk-parent uk-active" @endif>
									<a href="{{ route('name.contact')}}">Contact</a>
								</li>

				            </ul>

				        </div>
				    </div>
				    <a href="#mobile-nav" class="uk-hidden@xl uk-hidden@l uk-hidden@m mobile-nav" data-uk-toggle="target: #mobile-nav"><i class="fa fa-bars"></i>Menu</a>
		            <!-- Mobile Nav End -->

		            <!-- Top Header -->
					<div class="impx-top-header">
						<div class="uk-container uk-container-expand">

							<div class="uk-grid">
								<!-- header phone -->
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<div class="impx-top-phone">
										<p><i class="fa fa-phone"></i> Phone : +62 123456789</p>
									</div>
								</div><!-- header phone end-->
								<!-- header social media -->
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<div class="impx-top-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
											<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
											<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
										</ul>
									</div>
								</div><!-- header social media end -->
							</div>

						</div>
					</div>
					<!-- Top Header End -->


					<div class="uk-container uk-container-expand">
						<div data-uk-grid>

							<!-- Header Logo -->
							<div class="uk-width-auto">
								<div class="impx-logo">
									<a href="{{ url('/') }}"><img src="{{ url('frontend/images/logo.png')}}" class="" alt="Logo"></a>
								</div>
							</div>
							<!-- Header Logo End-->

							<!-- Header Navigation -->
							<div class="uk-width-expand uk-position-relative">
								<nav class="uk-navbar-container uk-navbar-transparent uk-visible@s uk-visible@m" data-uk-navbar>
									<div class="uk-navbar-right impx-navbar-right">
	        							<ul class="uk-navbar-nav impx-nav">
											<!-- Navigation Items -->
									    	<li @if (url()->current() == route('name.home')) class="uk-parent uk-active" @endif>
                                            	<a href="{{ route('name.home')}}" class="uk-navbar-nav-subtitle"><div>Home</div></a>
											</li>

											<li @if (url()->current() == route('name.about')) class="uk-parent uk-active" @endif>
												<a href="{{ route('name.about')}}" class="uk-navbar-nav-subtitle"><div>About us</div></a>
											</li>
											<li @if (url()->current() == route('name.gallery')) class="uk-parent uk-active" @endif>
												<a href="{{ route('name.gallery')}}" class="uk-navbar-nav-subtitle"><div>Gallery</div></a>
											</li>

											<li @if (url()->current() == route('name.testimonial')) class="uk-parent uk-active" @endif>
												<a href="{{ route('name.testimonial')}}" class="uk-navbar-nav-subtitle"><div>Testimonial</div></a>
											</li>
											<li @if (url()->current() == route('name.contact')) class="uk-parent uk-active" @endif>
												<a href="{{ route('name.contact')}}" class="uk-navbar-nav-subtitle"><div>Contact us</div></a>
											</li>
									    </ul>
									    <!-- Navigation Items End -->
									</div>
								</nav>
							</div>
							<!-- Header Navigation End -->
						</div>
					</div>
				</div>
			</div>

		</header>
		<!-- HEADER END -->
