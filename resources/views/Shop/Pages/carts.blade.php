
{{-- @include('Shop.Header.header2')         --}}

@if(!empty($shopProfile) && $shopProfile->template_id == 1)
    @include('Shop.Header.header1')
@elseif(!empty($shopProfile) && $shopProfile->template_id == 2)
    @include('Shop.Header.header2')
@elseif(!empty($shopProfile) && $shopProfile->template_id == 3)
    @include('Shop.Header.header3')
@else
    @include('Shop.Header.default')
@endif
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
						@if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div> 
                    @endif
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										@php $total = 0; $totalItems = 0; $discount = 0; @endphp
										@if(!empty($getSession))
											@foreach ($getSession as $key => $sessionValues)
											@php $total += $sessionValues['product_sale_price'] * $sessionValues['quantity'] @endphp
											@php $discount += $sessionValues['product_discount_price'] * $sessionValues['quantity'] @endphp
                							@php $totalItems = $totalItems+1; @endphp
										<tr>
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
															<img src="{{ asset('') }}{{ $sessionValues['image'] }}" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="#">{{ $sessionValues['product_name'] }}</a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col">{{ $sessionValues['product_sale_price'] }}</td>
											<td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" class="form-control" value="{{ $sessionValues['quantity'] }}" min="1" max="10" step="1" data-decimals="0" onchange="return redirect('update-quantity-cart/'+$key)" required>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
											<td class="total-col">{{ $sessionValues['product_sale_price'] * $sessionValues['quantity'] }}</td>
											<td class="remove-col"><a href="{{ url('remove-item-from-cart',$key) }}"><button class="btn-remove"><i class="icon-close"></i></button></a></td>
										</tr>
										@endforeach
										@endif
										{{-- <tr>
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
															<img src="assets/images/products/table/product-2.jpg" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="#">Blue utility pinafore denim dress</a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col">$76.00</td>
											<td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                                </div><!-- End .cart-product-quantity -->                                 
                                            </td>
											<td class="total-col">$76.00</td>
											<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
										</tr> --}}
									</tbody>
								</table><!-- End .table table-wishlist -->

	                			<div class="cart-bottom">
			            			{{-- <div class="cart-discount">
			            				<form action="#">
			            					<div class="input-group">
				        						<input type="text" class="form-control" required placeholder="coupon code">
				        						<div class="input-group-append">
													<button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
												</div><!-- .End .input-group-append -->
			        						</div><!-- End .input-group -->
			            				</form>
			            			</div><!-- End .cart-discount --> --}}

			            			{{-- <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a> --}}
		            			</div><!-- End .cart-bottom -->
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
											<tr class="summary-subtotal">
	                							<td>Total Items:</td>
	                							<td>{{ $totalItems ?? 0 }}</td>
	                						</tr><!-- End .summary-subtotal -->

	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td>PKR {{ $total  }}</td>
	                						</tr><!-- End .summary-subtotal -->

											<tr class="summary-subtotal">
	                							<td>Delivery Charges:</td>
	                							<td>PKR 3</td>
	                						</tr><!-- End .summary-subtotal -->

											<tr class="summary-subtotal">
	                							<td>Discount Price:</td>
	                							<td>PKR {{ $discount }}</td>
	                						</tr><!-- End .summary-subtotal -->

											<tr class="summary-total">
	                							<td>Grand Total:</td>
	                							<td>PKR {{ ($total - $discount) + 3 }}</td>
	                						</tr><!-- End .summary-subtotal -->

	                						<tr class="summary-shipping">
	                							<td>Payment Plan:</td>
	                							<td>&nbsp;</td>
	                						</tr>

	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="on_delivery" name="on_delivery" class="custom-control-input">
														<label class="custom-control-label" for="on_delivery">On Delivery</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td></td>
	                						</tr><!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="online_payment" name="online_payment" class="custom-control-input">
														<label class="custom-control-label" for="online_payment">Online Payment</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td></td>
	                						</tr><!-- End .summary-shipping-row -->

	                						{{-- <tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input type="radio" id="express-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>$20.00</td>
	                						</tr><!-- End .summary-shipping-row --> --}}

	                						<tr class="summary-total">
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->
									@if(!empty(Auth::user()) && Auth::user()->role == "customer")
	                					<a href="{{ url('checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
									@else
									<a href="{{ url('login') }}" class="btn btn-outline-primary-2 btn-order btn-block">Login Then Checkout</a>
									@endif
									</div><!-- End .summary -->

		            			<a href="{{ url('/') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        {{-- @include('Shop.Footer.footer2') --}}

@if(!empty($shopProfile) && $shopProfile->template_id == 1)
    @include('Shop.Footer.footer1')
@elseif(!empty($shopProfile) && $shopProfile->template_id == 2)
    @include('Shop.Footer.footer2')
@elseif(!empty($shopProfile) && $shopProfile->template_id == 3)
    @include('Shop.Footer.footer3')
@else
    @include('Shop.Footer.default')
@endif