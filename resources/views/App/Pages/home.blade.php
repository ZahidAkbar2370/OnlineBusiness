@extends('App.layout')
@section('content')
    

<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            <div class="intro-slide" style="background-image: url({{asset('assets/images/demos/demo-15/slider/slide-1.jpg')}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle">Want to Sale Product Online?</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Welcome To Online Layyah</h1><!-- End .intro-title -->

                    <a href="{{url('shop-signup')}}" class="btn btn-outline-primary-2 scroll-to">
                        <span>Become a Seller</span>
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
                @if($shop_categories)
                @foreach($shop_categories as $shop_category)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{url('shops/category/'.$shop_category->id)}}" class="cat-block">
                        <figure>
                            <span>
                                <img src="{{$shop_category->image}}" style="width: 131px !important; height: 76px !important;"  alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">{{$shop_category->shop_category_name}}</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 -->
                @endforeach
                @endif
                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/2.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Digital Cameras</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/3.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/4.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/5.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/6.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Smart Watches</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}
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
                <a href="{{ url('products') }}" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">

            @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div> 
                    @endif
            <div class="row justify-content-center">

                @if($products)
                @foreach($products as $product)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            {{-- <span class="product-label label-circle label-sale">Sale</span> --}}
                            <a href="{{ url('productDetail/'. $product->id) }}">
                                {{-- <img src="{{asset('assets/images/demos/demo-4/products/product-10.jpg')}}" alt="Product image" class="product-image"> --}}
                                <img src="{{$product->product_image_1}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{$product->ProductCategory->p_category_name ?? "category name"}}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">{{$product->product_name}}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">PKR{{$product->product_sale_price - $product->product_discount_price}}</span>
                                <span class="old-price">Was PKR {{$product->product_sale_price}}</span>
                            </div><!-- End .product-price -->
                            {{-- <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container --> --}}

                            {{-- <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav --> --}}
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                @endforeach
                @endif

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-11.jpg')}}" alt="Product image" class="product-image">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-12.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-12-2.jpg')}}" alt="Product image" class="product-image-hover">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-13.jpg')}}" alt="Product image" class="product-image">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-14.jpg')}}" alt="Product image" class="product-image">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-15.jpg')}}" alt="Product image" class="product-image">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-16.jpg')}}" alt="Product image" class="product-image">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-17.jpg')}}" alt="Product image" class="product-image">
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
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
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
                        <h2>Top Rated Shops</h2><!-- End .title text-center -->
                        <p class="title-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="row">
                        @if($shops)
                        @foreach($shops as $shop)
                        <div class="col-12 col-md-3 mb-5">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="{{url('shop/'.$shop->shop_url)}}">
                                        <img src="{{$shop->profile_image}}" style="width: 270px !important;height:202px !important ; " alt="Product image" class="product-image">
                                        <img src="{{$shop->cover_photo}}" style="width: 270px !important;height:202px !important ; " alt="Product image" class="product-image-hover">
                                    </a>

                                    {{-- <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                       
                                    </div><!-- End .product-action --> --}}

                                    <div class="product-action">
                                        <a href="{{url('shop/'.$shop->shop_url)}}" class="btn-product btn-cart"><span>Visit Shop</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-price">
                                        <strong>{{$shop->ShopCategory->shop_category_name ?? "category_name"}}</strong>
                                    </div><!-- End .product-price -->
                                    <h3 class="product-title"><a href="{{url('shop/'.$shop->shop_url)}}">{{$shop->shop_name}}</a></h3><!-- End .product-title -->
                                    
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->
                        @endforeach
                        @endif

                        {{-- <div class="col-12 col-md-3">
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
                        </div><!-- End .col-sm-6 --> --}}

                        {{-- <div class="col-12 col-md-3">
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
                        </div><!-- End .col-sm-6 --> --}}

                        {{-- <div class="col-12 col-md-3">
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
                        </div><!-- End .col-sm-6 --> --}}

                        

                      
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



@endsection