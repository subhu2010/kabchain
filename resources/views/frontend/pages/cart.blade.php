@extends('frontend.layout.welcome')



@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/css/cart.css')}}">

<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">
			<div class="page-title">
				<h3>Cart</h3>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mt-5">
	<div class="cart-area">
		<div class="row">
			<div class="col-12">
				<form action="#">
					<div class="table-content table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="product_remove"></th>
									<th class="product-thumbnail">images</th>
									<th class="cart-product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Unit Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product_remove">
										<a href="#">
											<i class="far fa-times-circle" title="Remove"></i>
										</a>
									</td>
									<td class="product-thumbnail">
										<a href="#">
											<img src="{{url('public/images/3.jpg')}}" alt="Cart Thumbnail">
										</a>
									</td>
									<td class="product-name"><a href="#">Products Name Here</a>
									</td>
									<td class="product-price"><span class="amount">Rs. 22.00 /-</span></td>
									<td class="quantity">
										<input type="number" min="1" max="100" value="1" />
									</td>
									<td class="product-subtotal"><span class="amount">Rs. 22.00 /-</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="total-cart mt-4">
						<div class="row">
							<div class="col-lg-6">
								<div class="coupon-all">
									<div class="coupon">
										<input id="coupon-code" class="input-text" name="coupon_code" value="" placeholder="Voucher code" type="text">
										<input class="button mt-xxs-30" name="apply_coupon" value="Redeem" type="submit">
									</div>
								</div>
							</div>
							<div class="offset-md-2 col-md-4">
								<div class="cart-page-total">
									<h2>Cart totals</h2>
									<ul>
										<li>Subtotal <span>Rs. 80.00 /-</span></li>
										<li>Shipping Fee <span>Rs. 80.00 /-</span></li>
										<li>Coupon <span>No</span></li>
										<li class="cart-total">Total <span>Rs. 80.00 /-</span></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="checkout-btn">
							<a href="{{url('checkout')}}">Proceed to checkout</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- outline logo -->
	<div class="outline-logo">
		<img src="{{url('public/images/logo-outline.png')}}" class="img-fluid" alt="">
	</div>
</div>

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

@endsection


