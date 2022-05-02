@extends('frontend.layouts.main')
@section('main-section')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url('{{asset('frontend/images/background/2.jpg')}}');">
        <div class="auto-container">
            <div class="inner-box">
                <h1>Checkout</h1>
                <div class="bread-crumb"><a href="index-2.html">Home &nbsp; /</a> <i class="current">Checkout</i>
                </div>
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
                                <div class="alert alert-danger"><b>we allow only 2 persons in 1 tent.<br/> 
                                    if you want to adjust in 1 tent then we allow max 4 persons with 2 extra bed.</b>
                                </div>
                            </div>
                            <tr>
                                <th>Preview</th>
                                <th class="prod-column">product</th>

                                <th>Person</th>
                                <th class="extra_bedding">Extra Bedding</th>
                                <th>Food</th>
                                <th class="price">Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $fullUrl = \URL::full();
                                $current_url = url()->current();
                                
                                // url with single tent with food
                                $singleTentWithFood = $current_url . '?category=single_tent&food=yes';
                                
                                // url with single tent without food
                                $singleTentWithoutFood = $current_url . '?category=single_tent&food=no';
                                
                                // url with group tent with food
                                $groupTentWithFood = $current_url . '?category=group_tent&food=yes';
                                
                                // url with group tent without food
                                $groupTentWithoutFood = $current_url . '?category=group_tent&food=no';
                                
                                $person = 1;
                                $food = "with_food";
                                $tentTitle = "Camp Booking";
                                $extraBed = false;
                                $extraBedCount = 0;
                                $tentPrice = 1500;
                                $price = 1000;

                                if ($fullUrl == $singleTentWithFood) {
                                    $food = "with_food";
                                    $person = 2;
                                    $extraBed = false;
                                    $extraBedCount = 0;
                                    $tentPrice = $person * $tentPrice;
                                }
                                
                                if ($fullUrl == $singleTentWithoutFood) {
                                    $food = "without_food";
                                    $person = 2;
                                    $extraBed = false;
                                    $extraBedCount = 0;
                                    $tentPrice = $person * $price;
                                }
                                
                                if ($fullUrl == $groupTentWithFood) {
                                    $food = "with_food";
                                    $person = 10;
                                    $extraBed = true;
                                    $extraBedCount = 4;
                                    $tentPrice = $person * $tentPrice;
                                }
                                
                                if ($fullUrl == $groupTentWithoutFood) {
                                    $food = "without_food";
                                    $person = 10;
                                    $extraBed = true;
                                    $extraBedCount = 4;
                                    $tentPrice = $person * $price;
                                }
                            @endphp
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb">
                                            <a href="#">
                                                <img src="{{ url('frontend/images/resource/products/12.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </td>
                                <td class="tent_title">
                                    <h3>{{$tentTitle}}</h3>
                                </td>
                                <td class="person">
                                    <div class="item-quantity">
                                        <select name="sort-by" id="person"
                                            class="form-control single_tent_with_food_person">
                                            @for ($i = 1; $i < 25; $i++)
                                                <option value="{{ $i }}" @if ($person == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </td>
                                <td class="extra_bedding">
                                    <select name="sort-by" id="extra_bed" class="form-control single_tent_with_food_tent" @if (!$extraBed)
                                        disabled
                                    @endif>
                                        @for ($i = 0; $i <= $extraBedCount; $i++)
                                            <option value="{{ $i }}" >{{ $i }}</option>
                                        @endfor
                                    </select>

                                </td>
                                <td class="food">
                                    <select name="food" id="food" class="form-control">
                                        <option value="with_food" @if ($food == "with_food") selected @endif>With Food</option>
                                        <option value="without_food" @if ($food == "without_food") selected @endif>Without Food</option>
                                    </select>
                                </td>
                                <td class="sub-total">
                                    <input type="text" name="tent_price" id="tentPrice" value="{{$tentPrice}}" style="display: none;"/>
                                    <b class="tentPrice" style="color: #242424;">{{number_format($tentPrice)}}</b>
                                </td>
                            </tr>


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
                                            <input type="text" name="name" placeholder="First Name"
                                                value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email Address <sup>*</sup></div>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                placeholder="Email">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>



                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Check In <sup>*</sup></div>
                                            <input type="date" name="check_in" id="check_in"
                                                value="{{ old('arrival_time') }}">

                                            @if ($errors->has('arrival_time'))
                                                <span class="text-danger">{{ $errors->first('arrival_time') }}</span>
                                            @endif
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Checkout <sup>*</sup></div>
                                            <input type="date" name="checkout" id="check_out"
                                                value="{{ old('arrival_time') }}">

                                            @if ($errors->has('arrival_time'))
                                                <span class="text-danger">{{ $errors->first('arrival_time') }}</span>
                                            @endif
                                        </div>
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone <sup>*</sup></div>
                                            <input type="text" name="phone" value="{{ old('phone') }}"
                                                placeholder="Phone No">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                        <!--Form Group-->
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Arrival Time <sup>*</sup></div>
                                            <input type="time" name="arrival_time" value="{{ old('arrival_time') }}">

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
                                                        <label for="payment-1"><strong>Through Instamojo</strong><span
                                                                class="small-text">Through Instamojo you can payment
                                                                using your debit card or credit card.</span></label>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="theme-btn btn-style-two order-btn"><span
                                                class="txt">Order place</span></button>

                                    </div>
                                    <!--End Place Order-->

                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <!--End Billing Details-->
        </div>
    </div>
@endsection
