
        <main class="main mt-7">

            <div class="container">
                <h3>Products</h3>
                {{-- <div class="toolbox toolbox-filter">
                    <div class="toolbox-left">
                        <a href="#" class="filter-toggler">Filters</a>

                    </div><!-- End .toolbox-left -->
                    <div class="toolbox-right">
                        <ul class="nav-filter product-filter">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".furniture">Furniture</a></li>
                            <li><a href="#" data-filter=".lighting">Lighting</a></li>
                            <li><a href="#" data-filter=".accessories">Accessories</a></li>
                            <li><a href="#" data-filter=".sale">Sale</a></li>
                        </ul>
                    </div><!-- End .toolbox-right -->
                </div><!-- End .filter-toolbox --> --}}

                {{-- <div class="widget-filter-area" id="product-filter-area">
                    <a href="#" class="widget-filter-clear">Clean All</a>

                    <div class="filter-area-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Category:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items filter-items-count">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">All</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">24</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">Furniture</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">3</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-3">
                                                <label class="custom-control-label" for="cat-3">Lighting</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-4">
                                                <label class="custom-control-label" for="cat-4">Accessories</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">4</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-5">
                                                <label class="custom-control-label" for="cat-5">Sale</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Sort by:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" checked id="sort-1" name="sortby">
                                                <label class="custom-control-label" for="sort-1">Default</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-2" name="sortby">
                                                <label class="custom-control-label" for="sort-2">Popularity</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-3" name="sortby">
                                                <label class="custom-control-label" for="sort-3">Average Rating</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-4" name="sortby">
                                                <label class="custom-control-label" for="sort-4">Newness</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-5" name="sortby">
                                                <label class="custom-control-label" for="sort-5">Price: Low to High</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-6" name="sortby">
                                                <label class="custom-control-label" for="sort-6">Price: High to Low</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Colour:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-colors filter-colors-vertical">
                                        <a href="#" style="background: #b87145;"><span>Brown</span></a>
                                        <a href="#" style="background: #f0c04a;"><span>Yellow</span></a>
                                        <a href="#" style="background: #333333;"><span>Black</span></a>
                                        <a href="#" class="selected" style="background: #cc3333;"><span>Red</span></a>
                                        <a href="#" style="background: #ebebeb;"><span>White</span></a>
                                    </div><!-- End .filter-colors -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Price:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Price Range:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .filter-area-wrapper -->
                </div><!-- End #product-filter-area.widget-filter-area -->
                 --}}
                <div class="products-container" data-layout="fitRows">
                    @if($products)
                    @foreach($products as $product)
                    <div class="product-item furniture col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="{{ url('productDetail') }}">
                                    <img src="{{asset('')}}{{$product->product_image_1}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">{{$product->product_name}}</a></h3><!-- End .product-title -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item -->
                    @endforeach
                    @endif
                    {{-- <div class="product-item lighting col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Out of stock</span>
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-2.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Swirl Suspension lamp</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <div class="out-price">$446.00</div><!-- End .out-price -->
                                </div><!-- End .product-price -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item furniture col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-3.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Block Side Table/Trolley</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $229.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item accessories lighting sale col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Sale</span>
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-4.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Madra Log Holder</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$103.00</span>
                                    <span class="old-price">Was $130.00</span>
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #a48264;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item furniture sale col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Sale</span>
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-5.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Foldable Tray Table</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$320.00</span>
                                    <span class="old-price">Was $480.00</span>
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #cba374;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item furniture accessories col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-6.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Original Stonewashed Beanbag</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $209.00
                                </div><!-- End .product-price -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item accessories lighting col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-7.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Wingback Chair</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $2450.00
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #cc9999;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #999999;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item furniture sale col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-8.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Cushion Set 3 Pieces</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $99.00
                                </div><!-- End .product-price -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item furniture accessories col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-9.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Garden Armchair</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $94.00
                                </div><!-- End .product-price -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item accessories col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-10.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Roots Sofa Bed</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $337.00
                                </div><!-- End .product-price -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item lighting sale col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-11.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $251.00
                                </div><!-- End .product-price -->
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}

                    {{-- <div class="product-item lighting sale col-6 col-md-4 col-lg-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <span class="product-label">Sale</span>
                                <a href="#">
                                    <img src="{{asset('assets/images/demos/demo-11/products/product-12.jpg')}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$892.00</span>
                                    <span class="old-price">Was $939.00</span>
                                </div><!-- End .product-price -->
                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .product-item --> --}}
                </div><!-- End .products-container -->
            </div><!-- End .container -->

            {{-- <div class="more-container text-center mt-0 mb-7">
                <a href="#" class="btn btn-outline-dark-3 btn-more"><span>more products</span><i class="la la-refresh"></i></a>
            </div><!-- End .more-container --> --}}
        </main><!-- End .main -->