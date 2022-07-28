@extends("Shop.BackendPanel.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Users</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('shop-/add-category')}}"><button class="btn btn-primary">Add New Category</button></a>
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>Category Name</th>
                                                    {{-- <th>Optional</th> --}}
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($all_categories))
                                                @foreach($all_categories as $key => $category)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$category->p_category_name}}</td>
                                                    {{-- <td>{{$category->optional}}</td> --}}
                                                    
                                                    @if($category->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif
                                                    
                                                    <td>

                                                        @if($category->publication_status == "1")
                                                            <a href="{{url('shop-/inactive-category/'.$category->id)}}" class="btn btn-danger">InActive</a>
                                                        @else
                                                            <a href="{{url('shop-/active-category/'.$category->id)}}" class="btn btn-success">Active</a>
                                                        @endif

                                                        <a href="{{url('shop-/edit-category/'.$category->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="{{url('shop-/delete-category/'.$category->id)}}" class="btn btn-danger">Delete</a>
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