@extends("Shop.BackendPanel.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Labels</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('shop-/add-label')}}"><button class="btn btn-primary">Add New Label</button></a>
                            
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
                                                    <th>Label Name</th>
                                                    {{-- <th>Optional</th> --}}
                                                    {{-- <th>Publication Status</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($all_labels))
                                                @foreach($all_labels as $key => $label)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$label->label}}</td>
                                                    {{-- <td>{{$brand->optional}}</td> --}}
                                                    
                                                    
                                                    <td>
                                                        {{-- <a href="{{url('shop-/edit-label/'.$label->id)}}" class="btn btn-info">Edit</a> --}}
                                                        <a href="{{url('shop-/delete-label/'.$label->id)}}" onclick="return confirm('Do You want to Delete Label?')" class="btn btn-danger">Delete</a>
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