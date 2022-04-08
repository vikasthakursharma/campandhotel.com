@extends('frontend.layouts.main')
@section('main-section')
<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Checkout</h1>
                <div class="bread-crumb"><a href="index-2.html">Home &nbsp; /</a> <i class="current">Checkout</i></div>
            </div>
        </div>
    </section>
	<!-- End Page Title -->

	<!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">

            <!--Default Links-->
            <ul class="default-links">
                <li>Returning customer? <a href="login.html">Click here to login</a></li>
            </ul>

            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form">
                    <form method="post" action="{{ url('payment-process') }}" method="POST" name="laravel_instamojo">
                            {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                				<div class="sec-title">
									<h1>Billing Details.</h1>
									<div class="separator"></div>
								</div>
                        		<div class="billing-inner">
                                    <div class="row clearfix">

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Name <sup>*</sup></div>
                                            <input type="text" name="name" placeholder="First Name" value="{{ old('name')}}">
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email Address <sup>*</sup></div>
                                        <input type="email" name="email" value="{{ old('email')}}" placeholder="Email">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone <sup>*</sup></div>
                                            <input type="text" name="phone" value="{{ old('phone')}}" placeholder="Phone No">
                                            @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                        </div>
                                         <!--Form Group-->
                                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Arrival Time <sup>*</sup></div>
                                            <input type="time" name="arrival_time" value="{{ old('arrival_time')}}">

                                            @if ($errors->has('arrival_time'))
                                            <span class="text-danger">{{ $errors->first('arrival_time') }}</span>
                                        @endif
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-xs-12">

                                            <div class="field-label">Message to owner</div>
                                            <textarea placeholder="Note about your order. e.g. special note for delivery"></textarea>

										</div>
									</div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="sec-title">
									<h1>Your Order.</h1>
									<div class="separator"></div>
								</div>
                                <div class="shop-order-box">
                                	<ul class="order-list">
                                    	<li>Prodcut<span>Total</span></li>
                                        <li>Villa ID:954<span>$65,00,000</span></li>
                                        <li>Subtotal<span class="dark">$65,00,000</span></li>
                                        <li>Shipping And Handling<span>Free Shipping</span></li>
                                        <li class="total">Total<span class="dark">$65,00,000</span></li>
                                    </ul>


                                    <!--Place Order-->
                                    <div class="place-order">
                                        <!--Payment Options-->
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1" checked>
                                                        <label for="payment-1"><strong>Through Instamojo</strong><span class="small-text">Through Instamojo you can payment using your debit card or credit card.</span></label>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="theme-btn btn-style-two order-btn"><span class="txt">Order place</span></button>

                                    </div>
                                    <!--End Place Order-->

                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div><!--End Billing Details-->
    	</div>
    </div>
    @endsection
