@extends("Shop.BackendPanel.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Brands</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('shop-/add-brand')}}"><button class="btn btn-primary">Add New Brand</button></a>
                            
                           <div class="card">

                                @if(Session::has("success"))
                                    <span class="bg bg-success" style="padding: 7px">{{ Session::get('success') }}</span>
                                @endif

                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>Brand Name</th>
                                                    {{-- <th>Optional</th> --}}
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($all_brands))
                                                @foreach($all_brands as $key => $brand)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$brand->brand_name}}</td>
                                                    {{-- <td>{{$brand->optional}}</td> --}}
                                                    
                                                    @if($brand->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif
                                                    
                                                    <td>

                                                        @if($brand->publication_status == "1")
                                                            <a href="{{url('shop-/inactive-brand/'.$brand->id)}}" class="btn btn-danger">InActive</a>
                                                        @else
                                                            <a href="{{url('shop-/active-brand/'.$brand->id)}}" class="btn btn-success">Active</a>
                                                        @endif

                                                        <a href="{{url('shop-/edit-brand/'.$brand->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="{{url('shop-/delete-brand/'.$brand->id)}}" onclick="return confirm('Do You want to Delete Brand?')" class="btn btn-danger">Delete</a>
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