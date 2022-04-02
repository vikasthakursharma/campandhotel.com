@extends('frontend.layouts.main')
@section('main-section')
<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/2.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Sign Up</h1>
            <div class="bread-crumb"><a href="index-2.html">Home &nbsp; /</a> <i class="current">SignUp</i></div>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Register Section -->
<section class="register-section">
    <div class="auto-container">

        <!-- Form Box -->
        <div class="form-box">
            <div class="box-inner">
                <h1>Sign Up</h1>

                <!--Login Form-->
                <div class="styled-form login-form">
                    <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/index.html">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="username" value="" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                            <input type="email" name="useremil" value="" placeholder="Emai Address *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="role" value="" placeholder="User Role *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock"></span></span>
                            <input type="password" name="userpassword" value="" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock"></span></span>
                            <input type="password" name="userpassword" value="" placeholder="Confirm Password">
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="button" class="theme-btn btn-style-two"><span class="txt">Sign up</span></button>
                            </div>
                            <div class="form-group social-icon-one pull-right">
                                Or Sign Up with &ensp;
                                <li><a href="#" class="fab fa-facebook-f"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-google"></a></li>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="pull-left">
                                <input type="checkbox" id="remember-me"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Register Section -->

<!--Clients Section-->
<section class="clients-section" style="background-image: url(images/background/1.jpg)">
    <div class="outer-container">

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
            </ul>
        </div>

    </div>
</section>
<!--End Clients Section-->
@endsection
