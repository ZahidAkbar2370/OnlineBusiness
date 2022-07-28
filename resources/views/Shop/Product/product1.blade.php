<div class="mt-7"></div>
<div class="container pt-6 new-arrivals">
                <div class="heading heading-center mb-3">
                    <h2 class="title">ALl Arrivals</h2><!-- End .title -->
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel"
                        aria-labelledby="new-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                @if($products)
                                @foreach($products as $product)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="{{ url('productDetail') }}">
                                                <img src="{{asset('')}}{{$product->product_image_1}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('')}}{{$product->product_image_2}}"
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
                                                <a href="#">{{$product->ProductCategory->p_category_name ?? "category"}}</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">{{$product->product_name}}</a></h3>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                PKR{{$product->product_sale_price - $product->product_discount_price}}
                                            </div><!-- End .product-price -->
                                            {{-- <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #e5dcb1;"><span
                                                        class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #b9cbd8;"><span class="sr-only">Color
                                                        name</span></a>
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
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-6-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-6-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                                {{-- <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-7-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-7-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                                {{-- <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-8-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-8-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                                {{-- <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-9-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-9-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                                {{-- <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-10-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-10-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                                {{-- <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-11-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-11-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                                {{-- <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-12-1.jpg')}}"
                                                    alt="Product image" class="product-image">
                                                <img src="{{asset('assets/images/demos/demo-5/products/product-12-2.jpg')}}"
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
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->

                {{-- <div class="more-container text-center mt-1 mb-3">
                    <a href="#" class="btn btn-outline-primary-2 btn-round btn-more">Load more</a>
                </div><!-- End .more-container --> --}}
            </div><!-- End .container -->