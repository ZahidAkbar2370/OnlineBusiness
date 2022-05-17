<main class="main">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                        "dots": false,
                        "nav": false, 
                        "responsive": {
                            "992": {
                                "nav": true
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url({{asset('assets/images/demos/demo-6/slider/slide-1.jpg')}});">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">You're Looking Good</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">New Lookbook</h1><!-- End .intro-title -->

                            <a href="#" class="btn btn-outline-white-4">
                                <span>Discover More</span>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url({{asset('assets/images/demos/demo-6/slider/slide-2.jpg')}});">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle text-white">Don’t Miss</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Mysrety Deals</h1><!-- End .intro-title -->

                            <a href="#" class="btn btn-outline-white-4">
                                <span>Discover More</span>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-theme -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="mb-5"></div><!-- End .mb-5 -->
            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Feature Products</h2><!-- End .title -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
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
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-1-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-1-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Denim jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-1-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-1-2-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-1-3-thumb.jpg')}}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-2-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-2-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Shoes</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Sandals</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $24.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">sale</span>
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-3-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-3-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Printed sweatshirt</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $7.99</span>
                                        <span class="old-price">Was $12.99</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-4-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-4-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $17.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-4-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-4-2-thumb.jpg')}}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-1-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-1-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Denim jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-1-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-1-2-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-1-3-thumb.jpg')}}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="deal bg-image pt-8 pb-8" style="background-image: url({{asset('assets/images/demos/demo-6/deal/bg-1.jpg')}});">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <div class="deal-content text-center">
                                <h4>Limited quantities. </h4>
                                <h2>Deal of the Day</h2>
                                <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
                            </div><!-- End .deal-content -->
                            <div class="row deal-products">
                                <div class="col-6 deal-product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/deal/product-1.jpg')}}" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Elasticated cotton shorts</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $24.99</span>
                                            <span class="old-price">Was $30.99</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <a href="category.html" class="action">shop now</a>
                                </div>
                                <div class="col-6 deal-product text-center">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/deal/product-2.jpg')}}" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="#">Fine-knit jumper</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">Now $8.99</span>
                                            <span class="old-price">Was $17.99</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <a href="category.html" class="action">shop now</a>
                                </div>
                            </div>
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .deal -->

            <div class="pt-4 pb-3" style="background-color: #222;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-truck"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                    <p>Free shipping for orders over $50</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                    <p>Free 100% money back guarantee</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-unlock"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Secure Payment</h3><!-- End .icon-box-title -->
                                    <p>100% secure payment</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-headphones"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                    <p>Alway online feedback 24/7</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-2 pb-2 -->

            <div class="mb-6"></div><!-- End .mb-5 -->

            <div class="container">
                <h2 class="title text-center mb-4">New Arrivals</h2><!-- End .title text-center -->

                <div class="products">
                    <div class="row justify-content-center">
                        @if($products)
                        @foreach($products as $product)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    {{-- <span class="product-label label-sale">Sale</span> --}}
                                    <a href="#">
                                        <img src="{{asset('')}}{{$product->product_image_1}}" alt="Product image" class="product-image">
                                        <img src="{{asset('')}}{{$product->product_image_2}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{$product->ProductCategory->p_category_name ?? "category_name"}}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">{{$product->product_name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now PKR {{$product->product_sale_price - $product->product_discount_price}}</span>
                                        <span class="old-price">Was PKR {{$product->product_sale_price}}</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        @endforeach
                        @endif
                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-6-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-6-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Shoes</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Sandals</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $12.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-7-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-7-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Bags</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Small bucket bag</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $14.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-7-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-7-2-thumb.jpg')}}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-8-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-8-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Denim jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $34.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-9-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-9-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">BShort wrap dress</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $17.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-10-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-10-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Biker jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $34.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-10-thumb.jpg')}}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/demos/demo-6/products/product-10-2-thumb.jpg')}}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-11-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-11-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Shoes</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Loafers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $9.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                        {{-- <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">sale</span>
                                    <a href="#">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-12-1.jpg')}}" alt="Product image" class="product-image">
                                        <img src="{{asset('assets/images/demos/demo-6/products/product-12-2.jpg')}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $12.99</span>
                                        <span class="old-price">Was $17.99</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                    </div><!-- End .row -->
                </div><!-- End .products -->

                <div class="more-container text-center mt-2">
                    <a href="{{url('products/'.$shopProfile->shop_url)}}" class="btn btn-outline-dark-2 btn-more"><span>show more</span></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

           
            <div class="mb-2"></div><!-- End .mb-5 -->
            
        </main><!-- End .main -->
