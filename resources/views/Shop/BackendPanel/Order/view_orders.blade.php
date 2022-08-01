@extends("Shop.BackendPanel.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>New Orders</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    {{-- <a href="{{url('shop-/add-brand')}}"><button class="btn btn-primary">Add New Brand</button></a> --}}
                            
                           <div class="card">

                                @if(Session::has("success"))
                                    <span class="bg bg-success" style="padding: 7px">{{ Session::get('success') }}</span>
                                @endif

                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>Customer Name</th>
                                                    <th>Shop Name</th>
                                                    <th>Project Name</th>
                                                    <th>Sale Price</th>
                                                    <th>Discount Price</th>
                                                    <th>Total</th>
                                                    {{-- <th>Optional</th> --}}
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($orders))
                                                @foreach($orders as $key => $order)
                                                <tr>
                                                    <td>{{$order->invoice_no}}</td>
                                                    <td>{{$order->uers->name ?? ''}}</td>
                                                    <td><a href="{{ url('shop/'.$order->shops->shop_url) ?? '#'}}">{{$order->shops->shop_name ?? ''}}</a></td>
                                                    <td>{{$order->products->product_name ?? ''}}</td>
                                                    <td>{{$order->product_sale_price}}</td>
                                                    <td>{{$order->product_discount_price}}</td>
                                                    <td>{{ $order->product_sale_price - $order->product_discount_price }}</td>
                                                    <td>{{$order->status}}</td>
                                                    
                                                    {{-- @if($brand->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif --}}
                                                    
                                                    <td>
                                                        <select  class="btn btn-dark" onchange="javascript:location.href = this.value;">
                                                            <option value="">Status</option>
                                                            <option value="{{url('shop-/order-accepted/'.$order->id)}}">Accepted</option>
                                                            <option value="{{url('shop-/order-delivered/'.$order->id)}}">Delivered</option>
                                                            <option value="{{url('shop-/order-done/'.$order->id)}}">Done</option>
                                                        </select>
                                                        <a href="{{url('shop-/edit-order/'.$order->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="{{url('shop-/delete-order/'.$order->id)}}" onclick="return confirm('Do You want to Delete Order?')" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


@endsection 