@extends('Shop.BackendPanel.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Create New Category</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    {{-- <h4>Create New User</h4> --}}
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{ URL::to('shop-/save-category') }}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                
                                                @if($message = Session::get("success"))
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <span class="bg bg-success" style="padding: 5px">{{ $message }}</span>
                                                    
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                                

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" placeholder="Category Name" name="category_name" required>
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Save Change">
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>


@endsection