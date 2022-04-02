@extends('frontend.layouts.main')
@section('main-section')
<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/2.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>Contact us</h1>
            <div class="bread-crumb"><a href="index-2.html">Home &nbsp; /</a> <i class="current">Contact</i></div>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h1>Contact Us</h1>
                        <div class="separator"></div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/sendemail.php" id="contact-form">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name " required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email " required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject " required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone " required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message "></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Send Now</span></button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>

            <!-- Info Column -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h1>Contact information</h1>
                        <div class="separator"></div>
                    </div>

                    <div class="content-boxed">
                        <div class="text">For any kind of query, contact us with the details below.</div>
                        <ul>
                            <li><span class="icon fa fa-phone"></span><a href="tel:000-000-000-00">+000 (000) 000 00</a></li>
                            <li><span class="icon fa fa-envelope"></span><a href="mailto:info@Dream Property">info@Dream Property.com</a></li>
                            <li><span class="icon fa fa-map-marker"></span>#59, East Madison Ave, Melbourne Australia</li>
                            <li><span class="icon fa fa-clock"></span>Opening Hours : Monday - Satureday   9:00 am  to  5pm</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Faq Section -->
<!--End Clients Section-->
@endsection
