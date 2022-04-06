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
                    <form method="post" action="{{ url('/user/auth/login') }}">
                        @csrf
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                            <input type="email" name="email"placeholder="Emai Address*">
                            @error('email')
                            <span class="text-danger">
                            {{ $message }}
                            @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock"></span></span>
                            <input type="password" name="password" placeholder="Enter Password">
                            @error('password')
                            <span class="text-danger">
                            {{ $message }}
                            @enderror
                            </span>
                        </div>
                        <div class="clearfix">
                            <div class="form-group pull-left">
                                <button type="submit" class="theme-btn btn-style-two"><span class="txt">Login Now</span></button>
                            </div>
                            <div class="form-group social-icon-one pull-right">
                                Or login with &ensp;
                                <li><a href="#" class="fab fa-facebook-f"></a></li>
                                <li><a href="#" class="fab fa-twitter"></a></li>
                                <li><a href="#" class="fab fa-google"></a></li>
                            </div>
                        </div>
                        <span style="color:red;">
                            {{ session('error') }}

                        </span>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                    </form>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Register Section -->
@endsection
