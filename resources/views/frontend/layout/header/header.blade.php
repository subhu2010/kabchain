<link rel="stylesheet" type="text/css" href="{{url('public/css/header.css')}}">
<header>
    <div class="container">
        <div class="top-header">
            <div class="row flex-center">
                <div class="col-md-3 d-none d-lg-block">
                    <div class="top-header-logo">
                        <h3 class="mb-0">Kab Chain</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="header-search form-inline">
                        <input class="form-control" type="text" name="" placeholder="Search For Products & Categories">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="top-header-icon">
                        <a href="{{url('login')}}" class="header-icon">
                            <i class="far fa-user"></i>
                        </a>
                        <a href="{{url('wishlist')}}" class="header-icon">
                            <i class="far fa-heart"></i>
                            <span>0</span>
                        </a>
                        <a href="{{url('cart')}}" class="header-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <span>0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12"></div>
            <div class="col-lg-9 col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark  custom-navbar">
                    <a class="navbar-brand d-lg-none"  href="#">Kab Chain</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-navbar">
                         <ul class="navbar-nav mr-auto">
                            <li class="nav-item {{ (request()->is('/*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item {{ (request()->is('shop*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="{{url('shop')}}">Store</a>
                            </li>
                            <li class="nav-item {{ (request()->is('about-us*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="{{url('about-us')}}">About</a>
                            </li>
                            <li class="nav-item {{ (request()->is('blog*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="{{url('blog')}}">Articles</a>
                            </li>
                            <li class="nav-item {{ (request()->is('contact-us*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="{{url('contact-us')}}">Contact</a>
                            </li>
                            <li class="nav-item {{ (request()->is('link*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="link">Get The App</a>
                            </li>
                            <li class="nav-item {{ (request()->is('register*')) ? 'active' : '' }}">
                                <a class="nav-link menu-link" href="{{url('register')}}">Become A Vendor</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link menu-link" href="home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="link">Store</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="link">Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="link">Get The App</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="link">Become A Vendor</a>
                            </li>
                        </ul>
                    </div>
                </nav> -->
            </div>
        </div>

    </div>
</header>