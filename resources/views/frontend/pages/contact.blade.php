@extends('frontend.layout.welcome')



@section('content')


<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">
			<div class="page-title">
				<h3>Contact Us</h3>
			</div>
			<div class="row">
				<div class="offset-lg-1 col-lg-10">
					<div class="row no-gutters">
						<div class="col-lg-7">
							<div class="contact-wrap">
								<form method="POST" id="contactForm" name="contactForm" class="contactForm" novalidate="novalidate">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" spellcheck="false"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" class="btn custom-btn">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="contact-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.0146597682!2d85.3428962149009!3d27.685941782800803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sen!2snp!4v1637644624683!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

@endsection