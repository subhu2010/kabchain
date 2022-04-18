@extends('frontend.layout.welcome')



@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/css/cart.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/user-dashboard.css')}}">

<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">

			<div class="account-page-area bg-grey section-padding">
				<div class="container">
					<div class="user-dashboard-section">
						<div class="row">
							@include('frontend.user-dashboard.user-dashboard-sidemenu')
							<div class="col-lg-12">
								<div class="order">
									<div class="order-title mb-4">
										<h3>My Order</h3>
									</div>
									<div class="go-shop">
										<div class="row ">
											<div class="col-md-8">
												<div class="order-dtl">
													<p class="m-0">Order No: #201666481138096 </p>
													<span>Placed on dec 25,2020</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="package go-shop">
									<div class="package-header">
										<div class="package-info">
											<span><i class="fas fa-gift"></i></span>
											<span class="package-info-text">Package 1</span>
										</div>
										<div class="seller-info">
											<a href="#">
												<span class="text">Sold By</span>
												<span class="text link">Seller Name</span>
											</a>
										</div>
									</div>
									<div class="package-body">
										<div class="shipping-info">
											<div class="shipping-delivery-info">
												<span class="float-left text delivery-success">Delivered on 04 Aug 2021</span>
												<div class="float-right absolute-top-right">
													<span class="text desc">Standard Delivery</span>
												</div>
											</div>
										</div>
										<div class="stepper-wrapper">
											<div class="stepper-item completed">
												<div class="step-counter"></div>
												<p class="step-text">Pending</p>
											</div>
											<div class="stepper-item completed">
												<div class="step-counter"></div>
												<p class="step-text">Processing</p>
											</div>
											<div class="stepper-item active">
												<div class="step-counter"></div>
												<p class="step-text">Shipped</p>
											</div>
											<div class="stepper-item ">
												<div class="step-counter"></div>
												<p class="step-text">Delivered</p>
											</div>
										</div>
										<div class="order-item">
											<div class="table-content table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td class="product-thumbnail">
																<a href="#">
																	<img src="http://localhost/creatu-project/kabchain/public/images/3.jpg" alt="Cart Thumbnail">
																</a>
															</td>
															<td class="product-name"><a href="#">Products Name Here</a>
															</td>
															<td class="product-price"><span class="amount">Rs. 22.00 /-</span></td>
															<td class="quantity">
																1
															</td>
															<td class="checkout-btn text-center">
																<a class="mt-0" href="#" data-toggle="modal" data-target="#exampleModal">Write a review</a>

															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="package go-shop">
									<div class="package-header">
										<div class="package-info">
											<span><i class="fas fa-gift"></i></span>
											<span class="package-info-text">Package 2</span>
										</div>
										<div class="seller-info">
											<a href="#">
												<span class="text">Sold By</span>
												<span class="text link">Seller Name</span>
											</a>
										</div>
									</div>
									<div class="package-body">
										<div class="shipping-info">
											<div class="shipping-delivery-info">
												<span class="float-left text delivery-success">Delivered on 04 Aug 2021</span>
												<div class="float-right absolute-top-right">
													<span class="text desc">Standard Delivery</span>
												</div>
											</div>
										</div>
										<div class="stepper-wrapper">
											<div class="stepper-item completed">
												<div class="step-counter"></div>
												<p class="step-text">Pending</p>
											</div>
											<div class="stepper-item completed">
												<div class="step-counter"></div>
												<p class="step-text">Processing</p>
											</div>
											<div class="stepper-item  completed">
												<div class="step-counter"></div>
												<p class="step-text">Shipped</p>
											</div>
											<div class="stepper-item  active">
												<div class="step-counter"></div>
												<p class="step-text">Delivered</p>
											</div>
										</div>
										<div class="order-item">
											<div class="table-content table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td class="product-thumbnail">
																<a href="#">
																	<img src="http://localhost/creatu-project/kabchain/public/images/3.jpg" alt="Cart Thumbnail">
																</a>
															</td>
															<td class="product-name"><a href="#">Products Name Here</a>
															</td>
															<td class="product-price"><span class="amount">Rs. 22.00 /-</span></td>
															<td class="quantity">
																1
															</td>
															<td class="checkout-btn text-center">
																<a class="mt-0" href="#" data-toggle="modal" data-target="#exampleModal">Write a review</a>

															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="package go-shop">
									<div class="package-header">
										<div class="package-info">
											<span><i class="fas fa-gift"></i></span>
											<span class="package-info-text">Package 2</span>
										</div>
										<div class="seller-info">
											<a href="#">
												<span class="text">Sold By</span>
												<span class="text link">Seller Name</span>
											</a>
										</div>
									</div>
									<div class="package-body">
										<div class="shipping-info">
											<div class="shipping-delivery-info">
												<span class="float-left text delivery-success">Delivered on 04 Aug 2021</span>
												<div class="float-right absolute-top-right">
													<span class="text desc">Standard Delivery</span>
												</div>
											</div>
										</div>
										<div class="stepper-wrapper">
											<div class="stepper-item completed">
												<div class="step-counter"></div>
												<p class="step-text">Pending</p>
											</div>
											<div class="stepper-item completed">
												<div class="step-counter"></div>
												<p class="step-text">Processing</p>
											</div>
											<div class="stepper-item  completed">
												<div class="step-counter"></div>
												<p class="step-text">Shipped</p>
											</div>
											<div class="stepper-item  completed">
												<div class="step-counter"></div>
												<p class="step-text">Delivered</p>
											</div>
										</div>
										<div class="order-item">
											<div class="table-content table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td class="product-thumbnail">
																<a href="#">
																	<img src="http://localhost/creatu-project/kabchain/public/images/3.jpg" alt="Cart Thumbnail">
																</a>
															</td>
															<td class="product-name"><a href="#">Products Name Here</a>
															</td>
															<td class="product-price"><span class="amount">Rs. 22.00 /-</span></td>
															<td class="quantity">
																1
															</td>
															<td class="checkout-btn text-center">
																<a class="mt-0" href="#" data-toggle="modal" data-target="#exampleModal">Write a review</a>

															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="reviews_wrapper">
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
		</div>
	</div>
</div>

@endsection