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
								<div class="edit-address">
									<h3 class="mb-4">Account Detail</h3>
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
												<label>Address</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
												<h5 class="border-bottom pb-4 mt-5">Password Change</h5>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
												<label>Current Password</label>
												<input type="password" class="form-control" placeholder="">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
												<label>New Password</label>
												<input type="password" class="form-control" placeholder="">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
												<label>Confirm New Password</label>
												<input type="password" class="form-control">
											</div>
										</div>
										<button type="submit" class="btn user-btn">Save Changes</button>
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