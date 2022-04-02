@extends('frontend.layouts.main')
@section('main-section')
<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/2.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Login</h1>
            <div class="bread-crumb"><a href="index-2.html">Home &nbsp; /</a> <i class="current">Login</i></div>
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
                <h1>Login Now</h1>

                <!--Login Form-->
                <div class="styled-form login-form">
                    <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/index.html">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="username" value="" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                            <input type="email" name="useremil" value="" placeholder="Emai Address*">
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock"></span></span>
                            <input type="password" name="userpassword" value="" placeholder="Enter Password">
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="button" class="theme-btn btn-style-two"><span class="txt">Login Now</span></button>
                            </div>
                            <div class="form-group social-icon-one pull-right">
                                Or login with &ensp;
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
@endsection
