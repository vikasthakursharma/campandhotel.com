
@extends('frontend.layouts.main')
@section('main-section')

<section class="dashboard-section">
		<div class="auto-container">
			<!-- Dashboard Header -->
			<div class="dashboard-header">
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<h1>Yogender kumar.</h1>
					</div>
					<!-- Column -->
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<ul class="dashboard-nav">
							<li><a href="booking.html">My booking</a></li>
							<li class="active"><a href="">My Dashboard</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<strong>Your Booking </strong>  HAS BEEN APPROVED!
			</div>

			<div class="row">

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ui-item bg-success">
						<div class="left">
							<h4>364</h4>
							<p>Active Booking</p>
						</div>
						<div class="right">
							<i class="flaticon-placeholder-2"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ui-item bg-warning">
						<div class="left">
							<h4>3242</h4>
							<p>Pending booking</p>
						</div>
						<div class="right">
							<i class="flaticon-eye"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ui-item bg-active">
						<div class="left">
							<h4>3786</h4>
							<p>Canceled Booking</p>
						</div>
						<div class="right">
							<i class="flaticon-talk"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="ui-item bg-dark">
						<div class="left">
							<h4>242</h4>
							<p>Bookmarked</p>
						</div>
						<div class="right">
							<i class="flaticon-heart"></i>
						</div>
					</div>
				</div>
			</div>

			<div class="row clearfix">

				<div class="column col-lg-12 col-md-12 col-sm-12">

					<div class="comments-tab">
						<h3>Latest Booking</h3>
						<div class="tabs-box">
							<ul class="tab-buttons clearfix">
								<li data-tab="#pending" class="tab-btn active-btn">Pending</li>
								<li data-tab="#approved" class="tab-btn">Approved</li>
							</ul>

							<div class="tabs-content" >
								<!-- Tab Active tab-->
								<div class="tab active-tab" id="pending">
									<div class="comments-area">
										<!--comment-->
										<article class="message-box">
											<div class="thumb-box">
                                                <p>this is approved tab
												<figure class="thumb"><img src="images/resource/author-1.jpg" alt=""></figure>
												<a href="#" class="reply-btn">Reply Now</a>
											</div>
											<div class="content-box">
												<div class="name">Micheal Clark</div>
												<span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2019</span>
												<div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
											</div>
										</article>
									</div>
								</div>

								<!-- Tab -->
								<div class="tab" id="approved">
									<div class="comments-area">
										<!--comment-->
										<article class="message-box">
                                            <p>This is pendin tab</p>
											<div class="thumb-box">
												<figure class="thumb"><img src="images/resource/author-1.jpg" alt=""></figure>
												<a href="#" class="reply-btn">Reply Now</a>
											</div>
											<div class="content-box">
												<div class="name">Moro Clark</div>
												<span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2019</span>
												<div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>

				</div>

				</div>

			</div>

		</div>
	</section>
	<!-- End Dashboard Section -->

	<!--Newsleter Section-->
    <section class="newsletter-section" style="background-image:url(images/background/1.jpg)">
    	<div class="auto-container">
        	<div class="inner-container">
            	<div class="row clearfix">

                    <!--Title Column-->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    	<div class="inner-column">
                        	<div class="icon-box">
                            	<span class="icon flaticon-door-knob"></span>
                            </div>
                            <h4>Newsletter Subscription</h4>
                            <div class="title">Get latest news & updates</div>
                        </div>
                    </div>

                    <!--Form Column-->
                    <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    	<div class="inner-column">

                            <!--Subscribe Form-->
                            <div class="subscribe-form">
                                <form method="post" action="http://ary-themes.com/html/noor_tech/dream-property/contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email Address" required>
                                        <button type="submit" class="submit-btn">Submit Now</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Newsleter Section-->
    @endsection
