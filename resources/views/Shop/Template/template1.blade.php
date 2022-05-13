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

                        <a href="#" class="logo">
                            <h3 style="color:white">LOGO</h3>
                            <!-- <img src="assets/images/demos/demo-5/logo.png" alt="Molla Logo" width="105" height="25"> -->
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{url('home1')}}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Products</a>
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
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
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
                        style="background-image: url(assets/images/demos/demo-5/slider/slide-1.jpg);">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">Don’t Miss</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Mystery Deals</h1><!-- End .intro-title -->
                            <div class="intro-text text-white">Online Only</div><!-- End .intro-text -->
                            <a href="#" class="btn btn-primary">Discover NOW</a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide"
                        style="background-image: url(assets/images/demos/demo-5/slider/slide-2.jpg);">
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














            <div class="container pt-6 new-arrivals">
                <div class="heading heading-center mb-3">
                    <h2 class="title">New Arrivals</h2><!-- End .title -->
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel"
                        aria-labelledby="new-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-5-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-5-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Linen-blend dress</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $60.00
                                            </div><!-- End .product-price -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #e5dcb1;"><span
                                                        class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #b9cbd8;"><span class="sr-only">Color
                                                        name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-6-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-6-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Sandals with lacing</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $70.00</span>
                                                <span class="old-price">Was $155.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-7-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-7-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Paper bag trousers</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $60.00
                                            </div><!-- End .product-price -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #9fac76;"><span
                                                        class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                        name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-8-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-8-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Handbags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Paper straw shopper</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $398.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-9-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-9-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Handbags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Bucket bag</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $350.00
                                            </div><!-- End .product-price -->
                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #e3a84d;"><span
                                                        class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #f48a5b;"><span class="sr-only">Color
                                                        name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                        name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-10-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-10-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Silk-blend kaftan</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                Now $370.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-11-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-11-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Linen-blend jumpsuit</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                $595.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-5/products/product-12-1.jpg"
                                                    alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-5/products/product-12-2.jpg"
                                                    alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-transparent">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">Sandals</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $120.00</span>
                                                <span class="old-price">Was $140.00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->

                <div class="more-container text-center mt-1 mb-3">
                    <a href="#" class="btn btn-outline-primary-2 btn-round btn-more">Load more</a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->





            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="video-banner video-banner-bg bg-image text-center"
                style="background-image: url(assets/images/demos/demo-5/bg-2.jpg)">
                <div class="container">
                    <h3 class="video-banner-title h1 text-white"><span>New Collection</span><strong>Winter’19 <i>/</i>
                            Spring’20</strong></h3><!-- End .video-banner-title -->
                    <a href="https://www.youtube.com/watch?v=vBPgmASQ1A0" class="btn-video btn-iframe"><i
                            class="icon-play"></i></a>
                </div><!-- End .container -->
            </div><!-- End .video-banner bg-image -->

            <div class="mb-2"></div><!-- End .mb-2 -->






            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Trendy Products</h2><!-- End .title -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel"
                        aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                            data-toggle="owl" data-owl-options='{
                "nav": false, 
                "dots": true,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "480": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                    },
                    "1200": {
                        "items":4,
                        "nav": true
                    }
                }
            }'>
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-5/products/product-1-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-5/products/product-1-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-transparent">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Vest dress</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $9.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #2d272b;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #8f957d;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-5/products/product-2-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-5/products/product-2-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-transparent">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Dress with a belt</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        $29.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-5/products/product-3-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-5/products/product-3-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-transparent">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Shoes</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Sandals</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $24.99</span>
                                        <span class="old-price">Was $30.99</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-5/products/product-4-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-5/products/product-4-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-transparent">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Handbags</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Bucket bag</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $17.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-5/products/product-1-1.jpg"
                                            alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-5/products/product-1-2.jpg"
                                            alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"
                                            title="Add to wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-transparent">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Vest dress</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $9.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #2d272b;"><span
                                                class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #8f957d;"><span class="sr-only">Color
                                                name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="container">
                <div class="cta cta-separator mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cta-wrapper text-center">
                                <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                                <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for
                                    first shopping</p><!-- End .cta-desc -->

                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address"
                                            aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-rounded" type="submit"><i
                                                    class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .cta -->
            </div><!-- End .container -->

            <div class="bg-lighter pt-7 pb-4" style="background-color: #fafafa;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                    <p>Free shipping for orders over $50</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-4 -->

                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-refresh"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                    <p>Free 100% money back guarantee</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-4 -->

                        <div class="col-sm-6 col-lg-4">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                    <p>Alway online feedback 24/7</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter pt-5 pb-5 -->
        </main><!-- End .main -->








          












        <footer class="footer footer-2">
            <div class="footer-middle border-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="widget widget-about">
                                <h3>Online Layyah</h3>
                                <!-- <img src="assets/images/demos/demo-5/logo-footer.png" class="footer-logo"
                                    alt="Footer Logo" width="105" height="25"> -->
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet eos maiores iste provident nemo quidem cumque quo quia facilis molestiae laboriosam alias enim possimus ipsum nihil mollitia dolore, veritatis commodi. </p>

                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <a href="tel:123456789">+0123 456 789</a>
                                        </div><!-- End .col-sm-6 -->
                                        <div class="col-sm-6 col-md-8">
                                            <span class="widget-about-title">Payment Method</span>
                                            <figure class="footer-payments">
                                                <img src="assets/images/payments.png" alt="Payment methods" width="272"
                                                    height="20">
                                            </figure><!-- End .footer-payments -->
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">About Molla</a></li>
                                    <li><a href="#">How to shop on Molla</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-64 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2022 Online Layyah. All Rights Reserved.</p>
                    <!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->
                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                                class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->


    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->


    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-5.js"></script>
</body>


<!-- molla/index-5.html  22 Nov 2019 09:56:18 GMT -->

</html>