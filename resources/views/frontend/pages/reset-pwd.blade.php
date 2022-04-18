<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Page Title -->
	<title>Kab Chain</title>


	<!-- FavIcon Link -->
	<link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="description" content="">
	<meta name="keywords" content="">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

	<!-- fontawesome css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<!-- Global CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('public/css/login.css')}}">



	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!-- Jquery 1.9.1 -->
	<script type="text/javascript" src="{{url('public/js/jquery-1.9.1.min.js')}}"></script>



</head>

<body>


	<div class="container">	
		<div class="row wrapper">
			<div class="col-lg-12">
				<div class="login">
					<div class="login-content">
						<div class="row">
							<div class="col-lg-6">
								<div class="d-flex justify-content-between">
									<a href="{{url('login')}}" class="link-tag">< Go to Login page</a>
									<a href="{{url('/')}}" class="link-tag">Go to Home page ></a>
								</div>
								<h4>Reset Password</h4>
								<p class="link-tag register">Enter your email below and we will send you the reset link.</p>
								<form>
									<div class="form-group">
										<input type="email" name="email" class="form-control login-form-control email" placeholder="Enter your email here">
										<span class="input-item">
											<i class="far fa-envelope"></i>
										</span>
									</div>
									<div class="form-group">
										<button class="btn login-btn" type="button" data-toggle="modal" data-target="#exampleModal">Send me the reset link</button>
										<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-sm  modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-body reset-body">
														<i class="fas fa-check-circle"></i>
														<h4>Reset Link Sent</h4>
														<p>Please check your email for the reset link and follow the procedure</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-6">
								<div class="login-img">
									<img src="{{url('public/images/8.jpg')}}" class="img-fluid" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>



<!-- Global JS -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>


</html>









