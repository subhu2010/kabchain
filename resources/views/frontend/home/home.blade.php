@extends('frontend.layout.welcome')



@section('content')
<link rel="stylesheet" type="text/css" href="{{url('public/css/home.css')}}">

<div class="top-home-bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-4 d-none d-md-block">
				<div class="accordion menu-accordion" id="accordionMenu">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<span class="category-collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span class="mr-3"><i class="fas fa-bars"></i></span>
									All Categories
								</span>
							</h2>
						</div>
						
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionMenu">
							<div class="card-body">
								<ul class="home-category-list">
									<li><a href="#">Women's Clothing</a></li>
									<li><a href="#">Men's Clothing</a></li>
									<li><a href="#">Phone & Accessories</a></li>
									<li><a href="#">Electronics</a></li>
									<li><a href="#">Tools. Industrial & Scientific</a></li>
									<li><a href="#">Toy, Hobbies & Robot</a></li>
									<li><a href="#">Computer & Office</a></li>
									<li><a href="#">Automobiles & Motorcycle</a></li>
									<li><a href="#">Sports & Outdoor</a></li>
									<li><a href="#">Home, garden & Furniture</a></li>
									<li><a href="#">Jewelry & Watches</a></li>
									<li><a href="#">Home Appliances</a></li>
									<li><a href="#">Shoes & Bags</a></li>
									<li><a href="#">Health, Beauty & Hair</a></li>
									<li><a href="#">Lights & Lighting</a></li>
									<li><a href="#">Health Protection</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div id="home-main-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item custom-carousel-item active">
							<img src="{{url('public/images/slider1.jpeg')}}" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item custom-carousel-item">
							<img src="{{url('public/images/slider2.jpg')}}" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- trending section -->
<div class="container-fluid ma-b">
	<div class="trending-section">
		<div class="home-card-section">
			<div class="section-title">
				<h4><img src="{{url('public/images/trending.png')}}" class="img-fluid" alt="">Trending</h4>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
					<a href="{{url('single-product')}}">
						<div class="kab-card">
							<div class="kab-card-img">
								<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="kab-card-title">
								<h6>Smart Watch</h6>
							</div>
							<div class="kab-card-price">
								<p>Rs. 2,500/- <span><strike>Rs. 3,000/-</strike> </span></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-2 col-md-4">
					<a href="{{url('single-product')}}">
						<div class="kab-card">
							<div class="kab-card-img">
								<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="kab-card-title">
								<h6>Smart Watch</h6>
							</div>
							<div class="kab-card-price">
								<p>Rs. 2,500/- <span><strike>Rs. 3,000/-</strike> </span></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
					<a href="{{url('single-product')}}">
						<div class="kab-card">
							<div class="kab-card-img">
								<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="kab-card-title">
								<h6>Smart Watch</h6>
							</div>
							<div class="kab-card-price">
								<p>Rs. 2,500/- <span><strike>Rs. 3,000/-</strike> </span></p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- feature products section -->
<div class="container-fluid ma-t">
	<div class="featured-section">
		<div class="home-card-section">
			<div class="section-title">
				<h4><img src="{{url('public/images/trending.png')}}" class="img-fluid" alt="">Featured Products</h4>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-4">
					<a href="{{url('single-product')}}">
						<div class="kab-card">
							<div class="kab-card-img">
								<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="kab-card-title">
								<h6>Smart Watch</h6>
							</div>
							<div class="kab-card-price">
								<p>Rs. 2,500/- <span><strike>Rs. 3,000/-</strike> </span></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-2 col-md-4">
					<a href="{{url('single-product')}}">
						<div class="kab-card">
							<div class="kab-card-img">
								<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="kab-card-title">
								<h6>Smart Watch</h6>
							</div>
							<div class="kab-card-price">
								<p>Rs. 2,500/- <span><strike>Rs. 3,000/-</strike> </span></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
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
				<div class="col-lg-2 col-md-4">
					<a href="{{url('single-product')}}">
						<div class="kab-card">
							<div class="kab-card-img">
								<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
							</div>
							<div class="kab-card-title">
								<h6>Smart Watch</h6>
							</div>
							<div class="kab-card-price">
								<p>Rs. 2,500/- <span><strike>Rs. 3,000/-</strike> </span></p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-2 col-md-4">
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




<div class="container-fluid ma-t">
	<div class="row">
		<div class="col-lg-4">
			<div class="home-deal-section">
				<img src="{{url('public/images/deal1.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
		<div class="col-lg-4">
			<div class="home-deal-section">
				<img src="{{url('public/images/deal2.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
		<div class="col-lg-4">
			<div class="home-deal-section">
				<img src="{{url('public/images/deal3.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</div>




<!-- home category -->
<div class="container-fluid ma-t">
	<div class="row">
		<div class="col-lg-6 mb-4">
			<div class="hot-category">
				<div class="section-title">
					<h4><img src="{{url('public/images/stat.png')}}" class="img-fluid" alt="">Hot Category</h4>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 mb-4">
						<a href="{{url('single-product')}}">
							<div class="home-category-card">
								<div class="home-category-card-img">
									<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="home-category-card-title">
									<h6>
										Laptops
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 mb-4">
						<a href="{{url('single-product')}}">
							<div class="home-category-card">
								<div class="home-category-card-img">
									<img src="{{url('public/images/4.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="home-category-card-title">
									<h6>
										Laptops
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 mb-4">
						<a href="{{url('single-product')}}">
							<div class="home-category-card">
								<div class="home-category-card-img">
									<img src="{{url('public/images/2.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="home-category-card-title">
									<h6>
										Laptops
									</h6>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 mb-4">
						<a href="{{url('single-product')}}">
							<div class="home-category-card">
								<div class="home-category-card-img">
									<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="home-category-card-title">
									<h6>
										Laptops
									</h6>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="sale-product">
				<div class="section-title">
					<h4><img src="{{url('public/images/sale.png')}}" class="img-fluid" alt="">Sale Products</h4>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<a href="{{url('single-product')}}">
							<div class="home-category-card">
								<div class="sale-product-img">
									<img src="{{url('public/images/5.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="sale-product-content">
									<div class="sale-product-title">
										<h6>
											Mac Book Air Laptop
										</h6>
									</div>
									<div class="sale-product-price">
										<p>Rs. 3,000/-</p>
									</div>
									<span class="sale-product-offer">50% off</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6">
						<a href="{{url('single-product')}}">
							<div class="home-category-card">
								<div class="sale-product-img">
									<img src="{{url('public/images/3.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="sale-product-content">
									<div class="sale-product-title">
										<h6>
											Mac Book Air Laptop
										</h6>
									</div>
									<div class="sale-product-price">
										<p>Rs. 3,000/-</p>
									</div>
									<span class="sale-product-offer">50% off</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="home-add-section">
				<img src="{{url('public/images/6.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</div>


<!-- product list -->
<div class="container-fluid ma-t">
	<div class="home-card-section">
		<div class="section-title">
			<h4 class="ma-b-0"><img src="{{url('public/images/trending.png')}}" class="img-fluid" alt="">Product List</h4>
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



<div class="container-fluid ma-t">
	<div class="home-fulldeal-section">
		<img src="{{url('public/images/slider3.jpg')}}" class="img-fluid" alt="">
	</div>
</div>




<!-- product list -->
<div class="container-fluid ma-t">
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




<!-- trending section -->
<div class="container-fluid ma-b ma-t home-disclaimer">
	<div class="trending-section">
		<div class="home-card-section">
			<div class="section-title">
				<h4>Disclaimer</h4>
			</div>
			<div class="kab-card">
				<div class="kab-card-title">
					<h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quas qui dolores praesentium ut totam hic culpa soluta eum necessitatibus, numquam, assumenda rerum provident fugit mollitia dolorum? Officia dolores, repellat. Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Molestias necessitatibus, dignissimos labore ex cumque beatae? Libero quo cumque quam mollitia facere aliquam cupiditate dolor tempora ullam. Enim quas autem, laboriosam? Lorem ipsum dolor sit amet consectetur adipisicing, elit. Sunt fugiat deleniti atque cum voluptate. Vero animi repellendus molestias repudiandae facere facilis, pariatur reprehenderit labore commodi temporibus, ex minus impedit aspernatur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit voluptate nulla eum quibusdam, minus beatae, corrupti omnis laudantium, maxime dolores cumque facilis quod perferendis eligendi aut doloremque ratione doloribus sed.</h6>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection