<link rel="stylesheet" type="text/css" href="{{url('public/css/footer.css')}}">

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
<footer class="pa-tb ma-t footer-gradient-bg">
	<div class="container-fluid">
		<section>
			<div class="row">
				<div class="col-lg-2 col-md-4">
					<div class="footer-section">
						<h3>KAB CHAIN</h3>

						<p class="footer-social-icon">
							<a href="#"> Subhidhanagar, Tinkune Kathmandu </a>
						</p>
						<p class="footer-social-icon">
							<a href="#"> 9876543210 </a>
						</p>
						<p class="footer-social-icon">
							<a href="#"> info@kachain.com </a>
						</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="footer-section">
						<h5>Follow Us</h5>
						<p class="footer-social-icon">
							<a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
						</p>
						<p class="footer-social-icon">
							<a href="#" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
						</p>
						<p class="footer-social-icon">
							<a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
						</p>
						<p class="footer-social-icon">
							<a href="#" class="youtube"><i class="fab fa-youtube"></i> Youtube</a>
						</p>
						
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="footer-section">
						<h5>Policy</h5>
						<p class="footer-social-icon">
							<a href="{{url('privacy-policy')}}"> Privacy Policy </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('terms-and-condition')}}"> Terms and Condition </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('disclaimer')}}"> Disclaimer </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('return-policy')}}"> Return Policy </a>
						</p>
					</div>
				</div>

				<div class="col-lg-2 col-md-4">
					<div class="footer-section">
						<h5>About</h5>
						<p class="footer-social-icon">
							<a href="{{url('contact-us')}}"> Contact Us </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('about-us')}}"> About Us </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('career')}}"> Careers </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('cooperation-information')}}"> Corporate Information </a>
						</p>
					</div>
				</div>

				<div class="col-lg-2 col-md-4">
					<div class="footer-section">
						<h5>Help</h5>
						<p class="footer-social-icon">
							<a href="{{url('payment')}}"> Payment </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('shipping')}}"> Shipping </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('cancellation')}}"> Cancellations </a>
						</p>
						<p class="footer-social-icon">
							<a href="{{url('faq')}}"> FAQ's </a>
						</p>
					</div>
				</div>

				<div class="col-lg-2 col-md-4">
					<div class="footer-section">
						<h5>For Support</h5>
						<p class="footer-social-icon">
							<a href="#"> name@kabchain.com </a>
						</p>
						<p class="footer-social-icon">
							<a href="#"> name@kabchain.com </a>
						</p>
						<p class="footer-social-icon">
							<a href="#"> name@kabchain.com </a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="footer-nav">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link footer-nav-link" href="{{url('about-us')}}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link footer-nav-link" href="{{url('terms-and-condition')}}">Terms and condition</a>
				</li>
				<li class="nav-item">
					<a class="nav-link footer-nav-link" href="{{url('privacy-policy')}}">Privacy policy</a>
				</li>
				<li class="nav-item">
					<a class="nav-link footer-nav-link" href="{{url('faq')}}">FAQ's</a>
				</li>
				<li class="nav-item">
					<a class="nav-link footer-nav-link" href="{{url('contact-us')}}">Contact</a>
				</li>
			</ul>
		</section>
	</div>	
</footer>
<div class="container">
	<div class="copyright">
		<div class="row flex-center">
			<div class="col-md-8">
				<p>© {{date('Y')}}, Kab Chain, All right reserved	|	 Design and Developed by: Creatu Developers</p>
			</div>
			<div class="col-md-4">
				<div class="payment-logo">
					<div class="payment-logo-img">
						<img src="{{url('public/images/khalti.svg')}}" class="img-fluid" alt="khalti">
					</div>
					<div class="payment-logo-img">
						<img src="{{url('public/images/esewa.png')}}" class="img-fluid" alt="khalti">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
        	$('body,html').animate({
        		scrollTop: 0
        	}, 400);
        	return false;
        });
    });
</script>