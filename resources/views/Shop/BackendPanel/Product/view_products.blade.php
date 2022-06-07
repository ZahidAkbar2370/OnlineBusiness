@extends("Shop.BackendPanel.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Products</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('shop-/create-product')}}"><button class="btn btn-primary">Add New Product</button></a>
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>Category Name</th>
                                                    <th>Brand Name</th>
                                                    <th>Product Name</th>
                                                    <th>Sale Price</th>
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($all_prouducts))
                                                @foreach($all_prouducts as $key => $product)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$product->category->category_name}}</td>
                                                    <td>{{$product->brand->brand_name}}</td>
                                                    <td>{{$product->product_name}}</td>
                                                    
                                                    @if($product->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif
                                                    
                                                    <td>

                                                        @if($product->status == "1")
                                                            <a href="{{url('shop-/active-product/'.$product->id)}}" class="btn btn-danger">InActive</a>
                                                        @else
                                                            <a href="{{url('shop-/inactive-product/'.$product->id)}}" class="btn btn-success">Active</a>
                                                        @endif

                                                        <a href="{{url('shop-/edit-product/'.$product->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="{{url('shop-/delete-product/'.$product->id)}}" class="btn btn-danger">Delete</a>
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