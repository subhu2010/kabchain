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
				<h3>Faq's</h3>
			</div>

			<div class="row">
				<div class="offset-md-1 col-md-10" id="accordion-style-1">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fa fa-angle-double-right mr-3"></i>Frequently asked question goes here ?
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde blanditiis ex, amet sed, quia tenetur dolorem debitis nam. Quidem aliquam dolores officia sed, nihil! Quae error voluptas, nesciunt hic blanditiis. Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae vel laudantium dolorem adipisci nobis at non expedita. Minima nihil illum voluptate totam necessitatibus est. Unde vel iste omnis, quasi exercitationem.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fa fa-angle-double-right mr-3"></i>Frequently asked question goes here ?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio placeat fugiat debitis, saepe nobis incidunt cupiditate, praesentium neque repellendus necessitatibus assumenda sit ex, magni cum ipsam voluptas eum earum maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat beatae quasi molestias eveniet sed! Repellat, ea! Facilis perspiciatis itaque minima iusto. Impedit, ratione aspernatur hic veritatis nesciunt, quas molestias sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi tempore dignissimos maxime commodi dolores, repellat facilis alias sint magni accusamus. Eius excepturi omnis id, quam consectetur quo aliquid at ab!</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="fa fa-angle-double-right mr-3"></i>Frequently asked question goes here ?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus impedit dolorum molestias quo. Quidem esse laboriosam eius qui, corporis dignissimos quam. Error est doloribus explicabo itaque debitis. Corporis, eaque ratione?</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<i class="fa fa-angle-double-right mr-3"></i>Frequently asked question goes here ?
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In deserunt labore ad error minus temporibus obcaecati itaque beatae? Porro explicabo numquam suscipit assumenda ut, asperiores, quae voluptatem consequuntur ratione optio. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias hic ducimus cumque reiciendis velit, quod! Assumenda quaerat reprehenderit voluptates ipsam temporibus atque laudantium, sint distinctio sequi? Repudiandae labore debitis necessitatibus!</p>
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