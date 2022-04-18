 	@extends('frontend.layout.welcome')



@section('content')



<link rel="stylesheet" type="text/css" href="{{url('public/css/single-product.css')}}">

<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>

<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">
			<div class="page-title">
				<h3>Product name</h3>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-12">
					<div class="single-product">
						<div class="row">
							<div class="col-lg-6">
								<div class="zoom-left">
									<div class="detail_img_div zoom-img ma_b">
										<img src="{{url('public/images/4.jpg')}}" alt="imggg" class="img_detail_page" id="zoom_03" data-zoom-image="{{url('public/images/4.jpg')}}" width="500">
									</div>
									<div id="gallery_01">
										<a  href="#" class="elevatezoom-gallery " data-update="" data-image="{{url('public/images/4.jpg')}}" data-zoom-image="{{url('public/images/4.jpg')}}">
											<img src="{{url('public/images/4.jpg')}}" width="100"  />
										</a>
										<a  href="#" class="elevatezoom-gallery " data-update="" data-image="{{url('public/images/5.jpg')}}" data-zoom-image="{{url('public/images/5.jpg')}}">
											<img src="{{url('public/images/5.jpg')}}" width="100"  />
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="single-product-content">
									<div class="single-product-title">
										<h2>Product Name</h2>
									</div>
									<div class="rating-display product-border">
										<div class="wrapper disabled">
											<input name="ratingRadio" type="radio" id="st1" value="5">
											<label for="st1"></label>
											<input name="ratingRadio" type="radio" id="st2" value="4">
											<label for="st2"></label>
											<input name="ratingRadio" type="radio" id="st3" value="3">
											<label for="st3"></label>
											<input name="ratingRadio" type="radio" id="st4" value="2">
											<label for="st4"></label>
											<input name="ratingRadio" type="radio" id="st5" value="1">
											<label for="st5"></label>
										</div>
										<div class="count">
											<span>0 review &nbsp;&nbsp;&nbsp;<strong>Submit a review</strong></span>
										</div>
									</div>
									<div class="product-border">
										<div class="price">
											<h4>Rs. 1200/-</h4>
											<h4><del>Rs. 1400/-</del></h4>
										</div>
										<div class="row	product-meta">
											<span class="col-3 meta-title">Availabilit : </span>
											<span class="col-9 meta-content">In Stock</span>
											<span class="col-3 meta-title">Categories : </span>
											<span class="col-9 meta-content">Accessories</span>
											<span class="col-3 meta-title">Free Shiping : </span>
											<span class="col-9 meta-content"></span>
										</div>
									</div>
									<div class="product-border">
										<div class="row	product-meta">
											<span class="col-3 meta-title">Select Color : </span>
											<span class="col-9 meta-content">
												<div class="swatch" data-option-index="1">
													<div data-value="Blue" class="swatch-element color blue available">
														<input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked="">
														<label for="swatch-1-blue" style="border-color: blue;">
															<span style="background-color: blue;"></span>
														</label>
													</div>
													<div data-value="Red" class="swatch-element color red available">
														<input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red">
														<label for="swatch-1-red" style="border-color: red;">
															<span style="background-color: red;"></span>
														</label>
													</div>
													<div data-value="Yellow" class="swatch-element color yellow available">
														<input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow">
														<label for="swatch-1-yellow" style="border-color: yellow;">
															<span style="background-color: yellow;"></span>
														</label>
													</div>
												</div>
											</span>
											<span class="col-3 meta-title">Size : </span>
											<span class="col-9 meta-content">
												<select class="form-select custom-form-select" aria-label="Default select example">
													<option>XXL</option>
													<option>XL</option>
													<option>L</option>
													<option>M</option>
													<option>M</option>
												</select>
											</span>
										</div>
									</div>
									<div class="product-border d-flex align-items-center justify-content-between">
										<div class="quantity">
											<input type="number" min="1" max="100" value="1" />
										</div>
										<div class="product-icon">
											<a href="{{url('cart')}}">
												<i class="fas fa-shopping-cart"></i>
											</a>
										</div>
										<div class="product-icon">
											<a href="{{url('wishlist')}}">
												<i class="far fa-heart"></i>
											</a>
										</div>
									</div>
									<div class="product-share">
										<div class="row">
											<div class="col-lg-6 col-md-6">
												<a href="http://www.facebook.com/sharer/sharer.php?u={{URL()->current()}}&title=blog-detail" target="_blank" class="share-icon facebook">
													<i class="fab fa-facebook-f"></i> <span>Share on Facebook</span>
												</a>
											</div>
											<div class="col-lg-6 col-md-6">
												<a href="http://twitter.com/intent/tweet?original_referer={{URL()->current()}}&text=blog-detail&url={{URL()->current()}}" target="_blank" class="share-icon twitter">
													<i class="fab fa-twitter"></i> <span>Share on Twitter</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="single-product-dtl">
						<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
							<li class="nav-item product-nav-item" role="presentation">
								<a class="nav-link active" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="true">Product Information</a>
							</li>
							<li class="nav-item product-nav-item" role="presentation">
								<a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
							</li>
							<li class="nav-item product-nav-item" role="presentation">
								<a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Another Tab</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
								<div class="reviews_wrapper">
									<h2>1 review for this product</h2>
									<div class="reviews_comment_box">
										<div class="comment_thmb">
											<img src="public/images/comment2.jpg" alt="">
										</div>
										<div class="comment_text">
											<div class="reviews_meta">
												<div class="product_rating">
													<ul>
														<li><a href="#"><i class="ion-android-star-outline"></i></a></li>
														<li><a href="#"><i class="ion-android-star-outline"></i></a></li>
														<li><a href="#"><i class="ion-android-star-outline"></i></a></li>
														<li><a href="#"><i class="ion-android-star-outline"></i></a></li>
														<li><a href="#"><i class="ion-android-star-outline"></i></a></li>
													</ul>
												</div>
												<p><strong>admin </strong>- June 12, 2021</p>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
											</div>
										</div>

									</div>
									<div class="comment_title">
										<h2>Add a review </h2>
										<p>Your email address will not be published. Required fields are marked </p>
									</div>
									<div class="product_rating mb-10">
										<h3>Your rating</h3>
										<div class="rating-display">
											<div class="wrapper disabled">
												<input name="ratingRadio" type="radio" id="st1" value="5">
												<label for="st1"></label>
												<input name="ratingRadio" type="radio" id="st2" value="4">
												<label for="st2"></label>
												<input name="ratingRadio" type="radio" id="st3" value="3">
												<label for="st3"></label>
												<input name="ratingRadio" type="radio" id="st4" value="2">
												<label for="st4"></label>
												<input name="ratingRadio" type="radio" id="st5" value="1">
												<label for="st5"></label>
											</div>
										</div>
									</div>
									<div class="product_review_form">
										<form action="#">
											<div class="row">
												<div class="col-12">
													<label for="review_comment">Your review </label>
													<textarea name="comment" id="review_comment"></textarea>
												</div>
												<div class="col-lg-6 col-md-6">
													<label for="author">Name</label>
													<input id="author" type="text">

												</div>
												<div class="col-lg-6 col-md-6">
													<label for="email">Email </label>
													<input id="email" type="text">
												</div>
												<div class="col-lg-12 col-md-12">
													<div class="btn-wrapper mt-4 text-center">
														<button type="submit" class="btn custom-btn">Submit</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">...</div>
						</div>
					</div>
					<div class="user-bought">
						<div class="container-fluid ma-t">
							<div class="home-card-section">
								<div class="section-title text-center">
									<h4 class="ma-b-0">User Also Bought</h4>
								</div>
							</div>
						</div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/4.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/4.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<div class="col-lg-3 col-md-4">
									<div class="home-product-list">
										<a href="{{url('single-product')}}">
											<div class="kab-card">
												<div class="kab-card-img">
													<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
												</div>
												<div class="kab-card-title">
													<h6>Smart Watch</h6>
												</div>
												<div class="kab-card-price">
													<p>Rs. 2,500/-</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12">
					<div class="home-product-list mt-0 mb-4">
						<a href="{{url('single-product')}}">
							<div class="kab-card">
								<div class="kab-card-img">
									<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="kab-card-title">
									<h6>Smart Watch</h6>
								</div>
								<div class="kab-card-price">
									<p>Rs. 2,500/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="home-product-list mt-0 mb-4">
						<a href="{{url('single-product')}}">
							<div class="kab-card">
								<div class="kab-card-img">
									<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="kab-card-title">
									<h6>Smart Watch</h6>
								</div>
								<div class="kab-card-price">
									<p>Rs. 2,500/-</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	//initiate the plugin and pass the id of the div containing gallery images
	$(document).ready (function () {
		$("#zoom_03").elevateZoom({
			gallery:'gallery_01',
			cursor: 'pointer',
			easing : true,
			galleryActiveClass: 'active',
			imageCrossfade: true,
			loadingIcon: 'https://www.elevateweb.co.uk/spinner.gif'
		});

	    //pass the images to Fancybox
	    $("#zoom_03").bind("click", function(e) {
	    	var ez = $('#zoom_03').data('elevateZoom');
	    	$.fancybox(ez.getGalleryList());
	    	return false;
	    });
	});
</script>

<script>
	(function ($) {
		$.fn.spinner = function () {
			this.each(function () {
				var el = $(this);

            // add elements
            el.wrap('<span class="spinner"></span>');
            el.before('<span class="sub">-</span>');
            el.after('<span class="add">+</span>');

            // substract
            el.parent().on('click', '.sub', function () {
            	if (el.val() > parseInt(el.attr('min')))
            		el.val(function (i, oldval) {
            			return --oldval;
            		});
            });

            // increment
            el.parent().on('click', '.add', function () {
            	if (el.val() < parseInt(el.attr('max')))
            		el.val(function (i, oldval) {
            			return ++oldval;
            		});
            });
        });
		};
	})(jQuery);

	$('input[type=number]').spinner();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.js" integrity="sha512-EjW7LChk2bIML+/kvj1NDrPSKHqfQ+zxJGBUKcopijd85cGwAX8ojz+781Rc0e7huwyI3j5Bn6rkctL3Gy61qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection