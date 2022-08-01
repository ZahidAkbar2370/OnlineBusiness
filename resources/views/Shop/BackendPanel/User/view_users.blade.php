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
                    <!-- /# column -->
                    <!-- <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div> -->
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('shop-/add-label')}}"><button class="btn btn-primary">Add New Label</button></a>
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Label Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <tr>
                                                    <td>Zahid AKbar</td>
                                                    <td>janujakhar2370@gmail.com</td></td>
                                                    <td>Admin</td>
                                                    <td>Active</td>

                                                    <td><a href="#" class="btn btn-danger">InActive</a>
                                                    <a href="#" class="btn btn-success">Active</a></td>
                                                    
                                                </tr> --}}
                                                @if(!empty($labels))
                                                @foreach($labels as $label)
                                                <tr>
                                                    <td>{{$label->label_name}}</td>

                                                    <td><a href="{{ url('shop-/label-status/'.$label->id)}}" class="btn btn-danger">Delete</a></td>
                                                    
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