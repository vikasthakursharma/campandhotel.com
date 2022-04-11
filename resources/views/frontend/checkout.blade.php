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

    	<!--Cart Section-->
        <section class="cart-section">
            <div class="auto-container">

                <!--Cart Outer-->
                <div class="cart-outer">
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                                    <div class="sec-title">
                                            <h1>Your Selection.</h1>

                                        </div>
                                <tr>
                                    <th>Preview</th>
                                    <th class="prod-column">product</th>
                                    <th class="price">Price</th>
                                    <th>Person</th>
                                    <th>Tent</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php
                        $fullUrl = \URL::full();
                        $current_url = url()->current();
                        $url_1 = $current_url.'?category=single_tent&food=yes';
                        $url_2 = $current_url.'?category=single_tent&food=no';
                        $url_3 = $current_url.'?category=group_tent&food=yes';
                        $url_4 = $current_url.'?category=group_tent&food=no';
                        @endphp

                        @if($fullUrl==$url_1)
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="{{ url('frontend/images/resource/products/12.jpg')}}" alt=""></a></figure>
                                </div>
                            </td>

                            <td><h4 class="prod-title">Single Tent With Food</h4></td>
                            <td class="sub-total">
                                <select name="sort-by" class="single_tent_with_food_price">
                                    <option value="2500" readonly="">2500</option>
                                </select></td>
                            <td class="qty"><div class="item-quantity">
                                    <select name="sort-by" class="single_tent_with_food_person">
                                            <option value="1">1</option>
                                        <option value="2" selected="">2</option>
                                    </select>
                            </div></td>
                            <td class="price">
                                    <select name="sort-by" class="single_tent_with_food_tent">
                                            <option value="1">1</option>
                                    </select>

                            </td>
                        </tr>
                        @endif

                        @if($fullUrl==$url_2)

                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="{{ url('frontend/images/resource/products/12.jpg')}}" alt=""></a></figure>
                                </div>
                            </td>

                            <td><h4 class="prod-title">Single Tent Without Food</h4></td>
                            <td class="sub-total">
                                <select name="sort-by" class="single_tent_without_food_price">
                                    <option value="2000" readonly="">2000</option>
                                </select></td>
                            <td class="qty"><div class="item-quantity">
                                    <select name="sort-by" class="single_tent_without_food_person">
                                            <option value="1">1</option>
                                        <option value="2" selected="">2</option>
                                    </select>
                            </div></td>
                            <td class="price">
                                    <select name="sort-by" class="single_tent_without_food_tent">
                                            <option value="1">1</option>
                                    </select>

                            </td>
                        </tr>
                        @endif

                        @if($fullUrl==$url_3)

                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="{{ url('frontend/images/resource/products/12.jpg')}}" alt=""></a></figure>
                                </div>
                            </td>

                            <td><h4 class="prod-title">Grouped Tent With Food</h4></td>
                            <td class="sub-total">
                                <select name="sort-by" class="grouped_tent_with_food_price">
                                    <option value="4000" readonly="">4500</option>
                                </select></td>
                            <td class="qty"><div class="item-quantity">
                                    <select name="sort-by" class="grouped_with_food_person">
                                            <option value="4" selected>4</option>
                                        <option value="5">5</option>
                                    </select>
                            </div></td>
                            <td class="price">
                                    <select name="sort-by" class="grouped_with_food_tent">
                                            <option value="1">1</option>
                                    </select>

                            </td>
                        </tr>
                        @endif
                        @if($fullUrl==$url_4)
                        <tr>
                            <td class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="{{ url('frontend/images/resource/products/12.jpg')}}" alt=""></a></figure>
                                </div>
                            </td>

                            <td><h4 class="prod-title">Grouped Tent without food</h4></td>
                            <td class="sub-total">
                                <select name="sort-by" class="grouped_tent_without_food_price">
                                    <option value="4500" readonly="">4000</option>
                                </select></td>
                            <td class="qty"><div class="item-quantity">
                                    <select name="sort-by" class="grouped_tent_without_food_person">
                                            <option value="4" selected>4</option>
                                        <option value="5">5</option>
                                    </select>
                            </div></td>
                            <td class="price">
                                    <select name="sort-by" class="grouped_tent_without_food_tent">
                                            <option value="1">1</option>
                                    </select>

                            </td>
                        </tr>

                        @endif


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>
        <!--End Cart Section-->

	<!--Checkout Page-->
    <div class="checkout-page">
        <div class="auto-container">

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



                                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <div class="field-label">Check In <sup>*</sup></div>
                                                <input type="date" name="check_in"id="check_in"value="{{ old('arrival_time')}}">

                                                @if ($errors->has('arrival_time'))
                                                <span class="text-danger">{{ $errors->first('arrival_time') }}</span>
                                            @endif
                                            </div>
                                             <!--Form Group-->
                                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <div class="field-label">Checkout <sup>*</sup></div>
                                                <input type="date" name="checkout" id="check_out" value="{{ old('arrival_time')}}">

                                                @if ($errors->has('arrival_time'))
                                                <span class="text-danger">{{ $errors->first('arrival_time') }}</span>
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
                                    	<li>Prodcut<span>
                                            </span></li>
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
