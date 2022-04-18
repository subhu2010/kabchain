@extends('frontend.layout.welcome')



@section('content')

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
									<div class="row go-shop">
										<div class="col-md-8">
											<p class="m-0">No order has been made yet. </p>
										</div>
										<div class="col-md-4 text-right">
											<a href="{{url('shop')}}">Go Shop</a>
										</div>
									</div>

									<div class="order-title mt-5 mb-4">
										<h3>My Order</h3>
									</div>
									<div class="row go-shop mb-4">
										<div class="col-md-8">
											<div class="order-dtl">
												<p class="m-0">Order No: #201666481138096 </p>
												<span>Placed on dec 25,2020</span>
											</div>
										</div>
										<div class="col-md-4 text-right">
											<a href="{{url('view-order')}}">View this order</a>
										</div>
									</div>
									<div class="row go-shop mb-4">
										<div class="col-md-8">
											<div class="order-dtl">
												<p class="m-0">Order No: #201666481138096 </p>
												<span>Placed on dec 25,2020</span>
											</div>
										</div>
										<div class="col-md-4 text-right">
											<a href="{{url('view-order')}}">View this order</a>
										</div>
									</div>
									<div class="row go-shop mb-4">
										<div class="col-md-8">
											<div class="order-dtl">
												<p class="m-0">Order No: #201666481138096 </p>
												<span>Placed on dec 25,2020</span>
											</div>
										</div>
										<div class="col-md-4 text-right">
											<a href="{{url('view-order')}}">View this order</a>
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

@endsection