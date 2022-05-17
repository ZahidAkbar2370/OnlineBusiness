@if(!empty($shopProfile) && $shopProfile->template_id == 1)
    @include('Shop.Header.header1')
    @include('Shop.Product.product1')
    @include('Shop.Footer.footer1')
@elseif(!empty($shopProfile) && $shopProfile->template_id == 2)
    @include('Shop.Header.header2')
    @include('Shop.Product.product2')
    @include('Shop.Footer.footer2')
@elseif(!empty($shopProfile) && $shopProfile->template_id == 3)
    @include('Shop.Header.header3')
    @include('Shop.Product.product3')
    @include('Shop.Footer.footer3')
@else
    @include('Shop.Header.default')
    @include('Shop.Product.default')
    @include('Shop.Footer.default')
@endif