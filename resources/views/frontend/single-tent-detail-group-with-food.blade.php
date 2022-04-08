@extends('frontend.layouts.main')
@section('main-section')
<!--Shop Single-->
<div class="shop-page">
    <div class="auto-container">
        <!--Basic Details-->
        <div class="basic-details">
            <div class="row clearfix">

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="carousel-outer">

                        <ul class="image-carousel owl-carousel owl-theme">
                            <li><a href="{{ url('frontend/images/resource/products/13.jpg')}}" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{url('frontend/images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('frontend/images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('frontend/images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('frontend/images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('frontend/images/resource/products/13.jpg')}}" alt=""></a></li>
                            <li><a href="images/resource/products/13.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="{{ url('frontend/images/resource/products/13.jpg')}}" alt=""></a></li>
                        </ul>

                        <ul class="thumbs-carousel owl-carousel owl-theme">
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-1.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-2.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-3.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-4.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-5.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-6.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-1.jpg')}}" alt=""></li>
                            <li><img src="{{ url('frontend/images/resource/products/shop-thumb-2.jpg')}}" alt=""></li>
                        </ul>

                    </div>
                </div>

                <!--if condition start if url is with food-->

                <!--Info Column-->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="details-header">
                            <h2>Tent for single/Coupled With food</h2>
                            <div class="item-price"><span>$92,00,000</span> $85,00,000</div>
                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> <span class="light fa fa-star"></span></div>
                            <!--reviews-->
                            <div class="reviews">
                                <a href="#">( 3  Reviews )</a>
                            </div>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <ul class="social-icon-one">
                            <li class="share">Share:</li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="g_plus"><a href="#"><span class="fab fa-google"></span></a></li>
                            <li class="linkedin"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li class="pinteret"><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                        @php
                        $fullUrl = \URL::full();
                       echo $fullUrl;
                        @endphp
                        <div class="other-options">
                            <!--Select Items-->
                            <div class="items-form">
                                <div class="select-column">
                                    <div class="form-group">
                                        <label>Price:</label>
                                        <select name="sort-by">
                                            <option value="4500"readonly>4500</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Person :</label>
                                        <select name="sort-by">
                                                <option value="4"selected>4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--Btns Box-->
                            <div class="btns-box">

                                <a href="{{ route('checkout')}}" class="theme-btn btn-style-two"><span class="txt">Book now</span></a>
                            </div>
                        </div>
                        <ul class="tags-box">
                            <li>Categories: <a href="#">Villa,</a> <a href="#">House,</a> <a href="#">Apartment</a> <a href="#">Commercial</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!--Basic Details-->

        <!--Product Info Tabs-->
        <div class="product-info-tabs">
            <!--Product Tabs-->
            <div class="prod-tabs tabs-box">

                <!--Tab Btns-->
                <ul class="tab-btns tab-buttons clearfix">
                    <li data-tab="#prod-details" class="tab-btn active-btn">Description</li>
                    <li data-tab="#prod-reviews" class="tab-btn">Additional Info</li>
                    <li data-tab="#prod-info" class="tab-btn">Reviews (3)</li>
                </ul>

                <!--Tabs Container-->
                <div class="tabs-content">

                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="prod-details">
                        <div class="content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli.</p>
                            <p>Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus.</p>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="prod-reviews">
                        <div class="content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus.</p>
                        </div>
                    </div>

                    <!--Tab / Active Tab-->
                    <div class="tab" id="prod-info">
                        <div class="content">

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info">Sandra Mavic</div>
                                        <div class="post-date">March 03, 2019</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec qam penatibus et magnis .</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star light"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info">Micheal Waugn</div>
                                        <div class="post-date">April 04, 2019</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec qam penatibus et magnis .</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star light"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Box-->
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                    <div class="comment-inner">
                                        <div class="comment-info">David Warner</div>
                                        <div class="post-date">March 10, 2019</div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus. Donec qam penatibus et magnis .</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment Form -->
                            <div class="shop-comment-form">
                                <div class="sec-title">
                                    <h1>Add a Review</h1>
                                    <div class="separator"></div>
                                </div>
                                <div class="rating-box">
                                    <div class="text"> Your Rating:</div>
                                    <div class="rating">
                                        <a href="#"><span class="fa fa-star"></span></a>
                                    </div>
                                    <div class="rating">
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                    </div>
                                    <div class="rating">
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                    </div>
                                    <div class="rating">
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                    </div>
                                    <div class="rating">
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                        <a href="#"><span class="fa fa-star"></span></a>
                                    </div>
                                </div>
                                <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/contact.html">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name ..." required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Email ..." required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Review ..."></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Submit Review</span></button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Product Info Tabs-->



    </div>
</div>
@endsection
