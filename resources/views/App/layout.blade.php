<!DOCTYPE html>
<html lang="en">


<!-- molla/index-15.html  22 Nov 2019 09:59:55 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Layyah</title>
    <meta name="keywords" content="Online Layyah">
    <meta name="description" content="Ecmmerce & Point of Sale">
    <meta name="author" content="CWZ">
    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico"> -->
    <meta name="apple-mobile-web-app-title" content="OnlineLayyah">
    <meta name="application-name" content="OnlineLayyah">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/demos/demo-15.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">
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
                            <h4 style="color: white">Online Layyah</h4>
                            <!-- <img src="assets/images/demos/demo-15/logo.png" alt="Molla Logo" width="105" height="25"> -->
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a  class="sf-with-ul">Shop</a>
                                    <ul>
                                        <li><a href="#">Shop Categories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pricing</a>
                                </li>

                                <li>
                                    <a class="sf-with-ul">Shop Templates</a>
                                    <ul>
                                        <li><a href="{{url('default')}}" target="_blank">Default</a></li>
                                        <li><a href="{{url('home1')}}" target="_blank">Template 1</a></li>
                                        <li><a href="{{url('home2')}}" target="_blank">Template 2</a></li>
                                        <li><a href="{{url('home3')}}" target="_blank">Template 3 </a></li>
                                    </ul>
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
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search Shop Name ..." required>
                                    <button class="btn btn-primary"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <a href="{{url('my-account')}}" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                        </a>
                        
                        <div class="dropdown cart-dropdown">
                            <a href="{{url('carts')}}" class="dropdown-toggle" role="button" data-toggle="dropdown"
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
                                    <a href="{{url('carts')}}" class="btn btn-primary">View Cart</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->

                        <a href="#" class="wishlist-link">
                            <a href="#" style="color:white ;">Login/Register</a>
                        </a>
                        
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-15/slider/slide-1.jpg);">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle">Want to know what's hot?</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Spring Lookbook 2019</h1><!-- End .intro-title -->

                            <a href="#scroll-to-content" class="btn btn-outline-primary-2 scroll-to">
                                <span>Start scrolling</span>
                                <i class="icon-long-arrow-down"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="mb-5"></div><!-- End .mb-5 -->


            <div class="container">
                <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->
                
                <div class="cat-blocks-container">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/1.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/2.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Digital Cameras</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/3.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/4.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/5.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="#" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-4/cats/6.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Smart Watches</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                    </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container for-you">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">Recommendation For You</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="products">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-10.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Headphones</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Beats by Dr. Dre Wireless  Headphones</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$279.99</span>
                                        <span class="old-price">Was $349.99</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-11.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Cameras & Camcorders</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">GoPro - HERO7 Black HD Waterproof Action</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $349.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-12.jpg" alt="Product image" class="product-image">
                                        <img src="assets/images/demos/demo-4/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Smartwatches</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Apple - Apple Watch Series 3 with White Sport Band</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $214.49
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-13.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Lenovo - 330-15IKBR 15.6"</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="out-price">$339.99</span>
                                        <span class="out-text">Out Of Stock</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-14.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Digital Cameras</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Sony - Alpha a5100 Mirrorless Camera</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $499.99
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 50%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 11 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-15.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Laptops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Home Mini - Smart Speaker  with Google Assistant</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $49.00
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 24 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #ef837b;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-sale">Sale</span>
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-16.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Audio</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">WONDERBOOM Portable Bluetooth Speaker</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">$99.99</span>
                                        <span class="old-price">Was $129.99</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-4/products/product-17.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Smart Home</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Google - Home Hub with  Google Assistant</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $149.00
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

            

            <div class="video-banner video-banner-bg video-fullheight bg-image text-center" style="background-image: url(assets/images/demos/demo-15/bg-1.jpg)">
                <div class="container">
                    <h3 class="video-banner-title h1 text-white"><span>Spring / Summer</span>The New Romantic Collection 2019</h3><!-- End .video-banner-title -->
                    <a href="https://www.youtube.com/watch?v=vBPgmASQ1A0" class="btn-video btn-iframe"><i class="icon-play"></i></a>
                </div><!-- End .container -->
            </div><!-- End .video-banner bg-image -->

            <div class="display-row bg-light">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-md-12">
                            <div class="heading text-center">
                                <h2 class="title">Trending Products</h2><!-- End .title text-center -->
                                <p class="title-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p><!-- End .title-desc -->
                            </div><!-- End .heading -->

                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                               
                                            </div><!-- End .product-action -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $165.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-12 col-md-3">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                               
                                            </div><!-- End .product-action -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $165.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-12 col-md-3">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                               
                                            </div><!-- End .product-action -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $165.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->

                                <div class="col-12 col-md-3">
                                    <div class="product product-4">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                                <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                               
                                            </div><!-- End .product-action -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $165.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->

                                

                              
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .display-row .bg-light -->

         
            <div class="mb-2"></div><!-- End .mb-2 -->

            <div class="container-fluid">
                <div class="cta cta-separator">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cta-wrapper cta-text text-center">
                                <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                                <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p><!-- End .cta-desc -->
                        
                                <div class="social-icons social-icons-colored justify-content-center">
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="cta-wrapper text-center">
                                <h3 class="cta-title mb-2">Our Costumers Say</h3><!-- End .cta-title -->

                                <div class="owl-carousel owl-simple owl-testimonials" data-toggle="owl" 
                                    data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": true,
                                        "responsive": {
                                            "1500": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <blockquote class="testimonial testimonial-icon text-center">
                                        <p>“ Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. ”</p>

                                        <cite>
                                            Charly Smith,
                                            <span>Customer</span>
                                        </cite>
                                    </blockquote><!-- End .testimonial -->

                                    <blockquote class="testimonial testimonial-icon text-center">
                                        <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque. ”</p>

                                        <cite>
                                            Damon Stone
                                            <span>Customer</span>
                                        </cite>
                                    </blockquote><!-- End .testimonial -->

                                    <blockquote class="testimonial testimonial-icon text-center">
                                        <p>“ Perferendis perspiciatis, voluptate, distinctio earum veritatis animi tempora eget blandit nunc tortor eu nibh. ”</p>

                                        <cite>
                                            John Smith
                                            <span>Customer</span>
                                        </cite>
                                    </blockquote><!-- End .testimonial -->
                                </div><!-- End .testimonials-slider owl-carousel -->
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .cta -->
            </div><!-- End .container-fluid -->

            <div class="mb-7"></div><!-- End .mb-7 -->

        </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="widget widget-about">
                                <!-- <img src="assets/images/demos/demo-15/logo-footer.png" class="footer-logo" alt="Footer Logo" width="105" height="25"> -->
                                <h2>Online Layyah</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, ab molestiae. Voluptatibus aliquid cum dolorum ipsum veritatis, quas beatae, ab repellat, voluptatem labore molestiae! Sed tenetur repellat voluptates facilis quas. </p>
                                
                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <a href="tel:123456789">+0308-1312527</a>
                                        </div><!-- End .col-sm-6 -->
                                        <!-- <div class="col-sm-6 col-md-8">
                                            <span class="widget-about-title">Payment Method</span>
                                            <figure class="footer-payments">
                                                <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                                            </figure>
                                        </div> -->
                                        <!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-4 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-2 -->

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
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-sm-6 col-lg-2">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Sign Up to Newsletter</h4><!-- End .widget-title -->

                                <p>For New Arivals, Any Events Update.</p>
                                
                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-dark"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-2 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container-fluid">
                    <p class="footer-copyright">Copyright © 2022 Online Layyah. All Rights Reserved.</p><!-- End .footer-copyright -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container-fluid -->
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
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" ><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a>Shop</a>
                        <ul>
                            <li><a href="#">Shop Categories</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                    <li>
                        <a class="sf-with-ul">Shop Templates</a>
                        <ul>
                            <li><a href="{{url('default')}}" target="_blank">Default</a></li>
                            <li><a href="{{url('home1')}}" target="_blank">Template 1</a></li>
                            <li><a href="{{url('home2')}}" target="_blank">Template 2</a></li>
                            <li><a href="{{url('home3')}}" target="_blank">Template 3 </a></li>
                        </ul>
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
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-15.js"></script>
</body>


<!-- molla/index-15.html  22 Nov 2019 10:00:09 GMT -->
</html>