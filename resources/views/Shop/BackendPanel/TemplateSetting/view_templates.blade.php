@extends("Shop.BackendPanel.layout")
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Templates</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                    <a href="{{url('shop/'.$shopProfile->shop_url)}}" target="_blank"><button class="btn btn-primary">Visit Webiste</button></a>
                            
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>Template Name</th>
                                                    <th>Demo</th>
                                                    <th>Status</th>
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
                                                @if(!empty($templates))
                                                @foreach($templates as $key => $template)
                                                <tr>
                                                    {{-- <td>{{$key+1}}</td> --}}
                                                    <td>{{$template->id}}</td>
                                                    <td>{{$template->template_name}}</td>
                                                    <td>
                                                        @if($template->id == "4")
                                                            <a href="{{url('default')}}" class="btn btn-secondary" target="_blank">View Demo</a>
                                                        @else
                                                        <a href="{{url('home'.$key+1)}}" class="btn btn-secondary" target="_blank">View Demo</a>
                                                        @endif
                                                    </td>
                                                    {{-- <td>{{$template->optional}}</td> --}}
                                                    
                                                    {{-- @if($brand->publication_status == "1")
                                                        <td>Active</td>
                                                    @else
                                                        <td>In-Active</td>
                                                    @endif --}}
                                                    
                                                    <td>

                                                        @if($shopProfile->template_id == $template->id)
                                                            <a href="#" class="btn btn-info">Activated</a>
                                                        @else
                                                            <a href="{{url('shop-/active-template/'.$template->id)}}" class="btn btn-success">Active</a>
                                                        @endif
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


                            @include('Shop.BackendPanel.TemplateSetting.slider');
                            @include('Shop.BackendPanel.TemplateSetting.trend');
                            
                            


                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


@endsection