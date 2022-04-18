@extends('frontend.layout.welcome')



@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/css/shop.css')}}">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">
			<div class="page-title">
				<h3>our shop</h3>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="shop-left-card">
						<h5>Accesories</h5>
						<ul class="shop-left-list">
							<li class="active">
								<a href="#">
									<span class="list-name">Apple Car</span>
									<span class="list-num">2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">Air port & Wireless</span>
									<span class="list-num">48</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">Cables & Docks</span>
									<span class="list-num">5</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">Cases & FLims</span>
									<span class="list-num">25</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">Chagring device</span>
									<span class="list-num">50</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">connected home</span>
									<span class="list-num">1</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">headphones</span>
									<span class="list-num">35</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="shop-left-card">
						<h5>Prices</h5>
						<div id="price-slider">
							<p>
								<label for="amount">Ranger: </label>
								<input type="text" id="amount-min" readonly style="border:0; color:#000000; font-weight:normal;">
								<input type="text" id="amount-max" readonly style="border:0; color:#000000; font-weight:normal;">
							</p>
							<div id="slider-range"></div>
						</div>
					</div>
					<div class="shop-left-card">
						<h5>Color</h5>
						<div class="swatch  mt-2" data-option-index="1">
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
					</div>
					<div class="shop-left-card">
						<h5>Brand</h5>
						<ul class="shop-left-list">
							<li class="active">
								<a href="#">
									<span class="list-name">Apple</span>
									<span class="list-num">22</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">LG</span>
									<span class="list-num">40</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="list-name">Samsung</span>
									<span class="list-num">65</span>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-9">
					<div class="shop-top-filter">
						<div class="row">
							<div class="col-lg-8  col-md-8 d-flex align-items-center">
								<div class="shop-result-item">
									<p>13 items</p>
								</div>
								<div class="shop-sort">
									<label>Sort By</label>
									<select class="custom-form-control">
										<option>Name</option>
										<option>Popular</option>
									</select>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="shop-show-item">
									<label>Show</label>
									<select class="custom-form-control">
										<option>12</option>
										<option>24</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="shop-list-item">
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
						</div>
						<nav aria-label="...">
							<ul class="pagination pagination-sm justify-content-center">
								<li class="page-item active" aria-current="page">
									<span class="page-link">1</span>
								</li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
<script>
	$(function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 20000,
			values: [ 0, 10000 ],
			animate:true,
			step:5,
			slide: function( event, ui ) {
				$( "#amount-min" ).val("Rs" + " " + ui.values[ 0 ] );
				$( "#amount-max" ).val("Rs" + " " + ui.values[ 1 ] );
			}
		});

		$( "#amount-min" ).val("Rs" + " " + $( "#slider-range" ).slider( "values", 0 ));
		$( "#amount-max" ).val( "Rs" + " " + $( "#slider-range" ).slider( "values", 1 ));
	});
</script>


@endsection