@extends('frontend.layout.welcome')



@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/css/shop.css')}}">

<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">
			<div class="page-title">
				<h3>Careers</h3>
			</div>
		</div> 
	</div>
	<div class="container">
		<div class="job-description">
			<div class="row">
				<div class="col-md-8">
					<div class="position">
						<h5>Care Facilities</h5>
						<table class="table table-borderless job-table mt-4">
							<tbody>
								<tr>
									<th row="2">Organization : </th>
									<td>Kab CHain</td>
								</tr>
								<tr>
									<th row="4">Application Deadline : </th>
									<td>Feb 09,2022</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="job-content">
				<h5>Job Description</h5>
				<p>we are hiring interior designer.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5 mb-5">
			<div class="col-md-12">
				<div class="job-submit-form">
					<div class="sec-title">
						<div class="separater m-0"></div>
						<div class="title" >Contact Us</div>
						<h2>Apply For This Job</h2>
					</div>
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-row mt-4">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
								</div>
								<div class="form-group">
									<input type="number" name="phone_no" class="form-control" placeholder="Enter Phone Number" required>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
								</div>
								<div class="form-group">
									<input type="file" name="cv" class="form-control-file form-control" required>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group view-more">
									<textarea class="form-control" placeholder="Message" name="message" required rows="8"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group view-more">
									<button type="submit" class="custom-btn btn view-btn m-0">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection


