@extends('frontend.layout.welcome')



@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/css/blog.css')}}">


<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
	<div class="container-fluid">
		<div class="page-section-content">

			<div class="row">
				<div class="offset-lg-1 col-lg-10">
					<div class="blog-card-detail">
						<div class="blog-card-date text-center">
							<span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
						</div>
						<div class="blog-card-title text-center">
							<h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
						</div>
						<div class="blog-card-img">
							<img src="{{url('public/images/7.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
						</div>
						<div class="row ma-t">
							<div class="col-lg-7">
								<div class="blog-card-content">
									<div class="blog-card-text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt felis sit amet nulla maximus elementum. Praesent interdum lectus ante, ut ornare tellus facilisis vel. Ut congue magna placerat, faucibus erat quis, commodo magna. Curabitur imperdiet est tortor, id faucibus tortor dictum nec. Nulla felis mauris, imperdiet vitae turpis vel, molestie gravida elit. Proin tincidunt ipsum eros, ac molestie augue scelerisque in. Fusce congue nibh commodo gravida bibendum. Vivamus est justo, finibus a libero ut, volutpat hendrerit turpis.</p>

										<p>Curabitur nec tempor ante. Praesent vitae semper ante. Etiam tristique sollicitudin quam, nec facilisis lectus iaculis sed. Nulla et est sit amet dui euismod dictum. Donec fermentum eu ex ac volutpat. In hac habitasse platea dictumst. In egestas, mauris ut semper tincidunt, orci turpis fringilla magna, vel aliquam arcu quam eget neque. Sed nec risus commodo purus pretium elementum sed non dolor. Aliquam quis nisl finibus, hendrerit orci at, facilisis odio.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation</p>
										<img src="{{url('public/images/2.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
										<p>Maecenas metus est, pellentesque sed ultricies eget, ultrices at lorem. Aenean tincidunt sem sit amet ipsum suscipit, vitae congue tellus pharetra. Sed sodales vulputate neque, id egestas massa cursus nec. Nullam consequat felis non ornare semper. Donec eu est eget urna luctus vehicula. Sed lobortis purus ac porta luctus. Suspendisse at odio neque. Cras tincidunt nisi sed sollicitudin gravida. Sed ac nisl mi. Morbi sed posuere libero, eget imperdiet sapien. Vestibulum fringilla purus nunc, vel mollis arcu porta et. Ut faucibus lorem quis felis condimentum euismod. Suspendisse aliquet, magna in malesuada viverra, magna sapien cursus sem, sed consectetur lorem quam aliquam nunc. Ut ultrices gravida purus sed suscipit. Aliquam dapibus non turpis sit amet porttitor. Morbi rutrum facilisis mauris quis fringilla.Vivamus a gravida ipsum. Phasellus mollis, nisi vitae tempus rhoncus, lorem lectus eleifend metus, et dignissim nulla lectus eu mi. Donec mi arcu, sollicitudin eget pharetra eu, tempus aliquam neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam at mauris id metus fermentum porta sit amet quis nisi. Nunc felis nisi, gravida ut bibendum sit amet, vulputate vel quam. Ut ac ultrices lectus, quis condimentum ante. Sed sit amet leo quis felis convallis malesuada euismod et arcu. Morbi cursus quam ac arcu luctus varius. Maecenas id dapibus nunc. Nunc tristique molestie iaculis. Vestibulum in elit neque. Maecenas vitae ligula lobortis, fringilla ante id, vehicula augue. Proin porta fringilla lorem ut dapibus. Suspendisse pellentesque condimentum rutrum. Nulla ultrices a velit nec tristique.</p>
									</div>
									<div class="blog-share"></div>
								</div>
							</div>
							<div class="offset-lg-1 col-lg-4">
								<div class="top-article">
									<h5>TOP ARTICLES</h5>
									<div class="article-card mt-4">
										<a href="{{url('blog-detail')}}">
											<div class="article-card-img">
												<img src="{{url('public/images/1.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
											</div>
											<div class="article-card-title">
												<h6>Donec sit amet lorem sed nibh auctor lacinia</h6>
											</div>
										</a>
									</div>
									<div class="article-card mt-4">
										<a href="{{url('blog-detail')}}">
											<div class="article-card-img">
												<img src="{{url('public/images/1.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
											</div>
											<div class="article-card-title">
												<h6>Donec sit amet lorem sed nibh auctor lacinia</h6>
											</div>
										</a>
									</div>
									<div class="article-card mt-4">
										<a href="{{url('blog-detail')}}">
											<div class="article-card-add-img">
												<img src="{{url('public/images/4.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
											</div>
										</a>
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