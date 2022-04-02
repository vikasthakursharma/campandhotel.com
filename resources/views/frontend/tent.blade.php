@extends('frontend.layouts.main')
@section('main-section')
<!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/2.jpg);">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Our Shop</h1>
                <div class="bread-crumb"><a href="index-2.html">Home &nbsp; /</a> <i class="current">Shop</i></div>
            </div>
        </div>
    </section>
	<!-- End Page Title -->

	<!--Shop Section-->
    <section class="shop-section">
    	<div class="auto-container">

            <!--Sort By-->
            <div class="items-sorting">
                <div class="row clearfix">
                    <div class="select-column col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select name="sort-by">
                                <option>Sort by Default Order</option>
                                <option>By Order</option>
                                <option>By Price</option>
                            </select>
                        </div>
                    </div>
                    <div class="results-column pull-right col-lg-6 col-md-6 col-sm-12">
                        <h4>Showing 1–12 of 23 results</h4>
                    </div>
                </div>
            </div>

            <!--Shop Items-->
            <div class="shop-items">
                <div class="row clearfix">

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                        	<div class="off-price">-30%</div>
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/1.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item One</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price">$42.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/2.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Two</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$75.00</span> $42.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                        	<div class="sold-out">sold Out</div>
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/3.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Three</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price">$199.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/4.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Four</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$109.00</span> $72.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/5.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Five</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$109.00</span> $25.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                        	<div class="off-price">-15%</div>
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/6.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Six</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$92.00</span> $17.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/7.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Seven</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price">$205.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                        	<div class="off-price">-15%</div>
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/8.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Eight</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$55.00</span> $12.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/9.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Nine</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$75.00</span> $42.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/10.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Ten</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$75.00</span> $42.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                        	<div class="sold-out">sold Out</div>
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/11.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Eleven</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price">$199.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="shop-single.html"><img src="{{ url('frontend/images/resource/products/1.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-box">
                            	<div class="upper-box">
                                	<h4><a href="shop-single.html">Item Twelve</a></h4>
                                </div>
                                <div class="lower-content">
                                	<div class="price"><span class="discount-price">$109.00</span> $72.00</div>
                                    <a href="shop-single.html" class="cart-btn theme-btn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Styled Pagination -->
				<div class="styled-pagination text-center">
					<ul class="inner-container clearfix">
						<li class="prev"><a href="#" class="active"><i class="flaticon-left-arrow"></i> Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#" class="active">Next <i class="flaticon-right-arrow-1"></i></a></li>
					</ul>
				</div>

            </div>

        </div>
    </section>
    <!--End Shop Section-->
@endsection
