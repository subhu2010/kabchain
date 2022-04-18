@extends('frontend.layout.welcome')



@section('content')

<link rel="stylesheet" type="text/css" href="{{url('public/css/blog.css')}}">

<!-- page top section category menu -->
@include('frontend.include.category-pagesection')
<!-- page top section category menu -->


<div class="page-section">
    <div class="container-fluid">
        <div class="page-section-content">
            <div class="page-title">
                <h3>read from our articles</h3>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{url('public/images/1.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
                                    <a href="{{url('blog-detail')}}" class="btn custom-btn blog-btn">read full article</a>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-date">
                                        <span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
                                    </div>
                                    <div class="blog-card-title">
                                        <h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
                                    </div>
                                    <div class="blog-card-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{url('public/images/2.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
                                    <a href="{{url('blog-detail')}}" class="btn custom-btn blog-btn">read full article</a>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-date">
                                        <span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
                                    </div>
                                    <div class="blog-card-title">
                                        <h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
                                    </div>
                                    <div class="blog-card-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{url('public/images/3.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
                                    <a href="{{url('blog-detail')}}" class="btn custom-btn blog-btn">read full article</a>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-date">
                                        <span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
                                    </div>
                                    <div class="blog-card-title">
                                        <h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
                                    </div>
                                    <div class="blog-card-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{url('public/images/4.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
                                    <a href="{{url('blog-detail')}}" class="btn custom-btn blog-btn">read full article</a>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-date">
                                        <span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
                                    </div>
                                    <div class="blog-card-title">
                                        <h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
                                    </div>
                                    <div class="blog-card-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{url('public/images/5.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
                                    <a href="{{url('blog-detail')}}" class="btn custom-btn blog-btn">read full article</a>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-date">
                                        <span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
                                    </div>
                                    <div class="blog-card-title">
                                        <h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
                                    </div>
                                    <div class="blog-card-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img src="{{url('public/images/6.jpg')}}" class="img-fluid" onerror="this.src='{{url('public/images/no-image.jpg')}}';">
                                    <a href="{{url('blog-detail')}}" class="btn custom-btn blog-btn">read full article</a>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-date">
                                        <span><i class="far fa-calendar-alt mr-2"></i>31/08/2021</span>
                                    </div>
                                    <div class="blog-card-title">
                                        <h4><a href="{{url('blog-detail')}}">Donec sit amet lorem sed nibh auctor lacinia.</a></h4>
                                    </div>
                                    <div class="blog-card-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="...">
                        <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection