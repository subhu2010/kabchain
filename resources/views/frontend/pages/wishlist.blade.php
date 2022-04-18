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
				<h3>Wishlist</h3>
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
									<th class="product-subtotal">Cart</th>
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
									<td class="checkout-btn text-center">
										<a class="mt-0" href="{{url('cart')}}">Add to cart</a>
									</td>
								</tr>
							</tbody>
						</table>
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


