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
						</div>
						<div class="col-lg-12">
							<div class="account-dtl">
								<p>Hello <strong>Username</strong> (not <strong>Username</strong>? <a href="#">Log out</a>)</p>

								<p>From your account dashboard you can view your <strong>recent orders</strong>, manage your <strong>billing addresses</strong> and <strong><a href="#">edit your password and account details.</a></strong></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection