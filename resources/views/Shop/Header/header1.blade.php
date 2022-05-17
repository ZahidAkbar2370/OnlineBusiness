<!DOCTYPE html>
<html lang="en">


<!-- molla/index-5.html  22 Nov 2019 09:55:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Layyah</title>
    <!-- Favicon
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png"> -->
    <!-- <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico"> -->
    <!-- <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff"> -->
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skins/skin-demo-5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demos/demo-5.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-5">
            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{url('/')}}" class="logo">
                            <h3 style="color:white">Online Layyah</h3>
                            <!-- <img src="assets/images/demos/demo-5/logo.png" alt="Molla Logo" width="105" height="25"> -->
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{url('shop/'.$shopProfile->shop_url)}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{url('products/'.$shopProfile->shop_url)}}">Products</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search header-search-extended header-search-visible">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <a href="#" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">0</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="#">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="#" class="product-image">
                                                <img src="{{asset('assets/images/products/cart/product-1.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="#" class="btn btn-primary">View Cart</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->





        <main class="main">
            <div class="intro-slider-container mb-0">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                    data-owl-options='{"nav": false, "dots": false}'>
                    <div class="intro-slide"
                        style="background-image: url({{asset('assets/images/demos/demo-5/slider/slide-1.jpg')}});">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">Don’t Miss</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Mystery Deals</h1><!-- End .intro-title -->
                            <div class="intro-text text-white">Online Only</div><!-- End .intro-text -->
                            <a href="#" class="btn btn-primary">Discover NOW</a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide"
                        style="background-image: url({{asset('assets/images/demos/demo-5/slider/slide-2.jpg')}});">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">Limited time only</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Treat your self</h1><!-- End .intro-title -->
                            <div class="intro-text text-white">Up to 50% off</div><!-- End .intro-text -->
                            <a href="category.html" class="btn btn-primary">Shop NOW</a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-theme -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="mb-4"></div><!-- End .mb-6 -->
