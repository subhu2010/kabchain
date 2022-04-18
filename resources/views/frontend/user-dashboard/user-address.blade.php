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
								<div class="account-address">
									<p>The following addresses will be used on the checkout page by default.</p>
								</div>
								<div class="edit-address">
									<h3>Billing Address</h3>
									<form>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>First Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group col-md-6">
												<label>Last Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Email</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group col-md-6">
												<label>Phone</label>
												<input type="number" class="form-control">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>City</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group col-md-6">
												<label>Street Address</label>
												<input type="text" class="form-control" placeholder="">
											</div>

										</div>
										<button type="submit" class="btn user-btn">Save Address</button>
									</form> 
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