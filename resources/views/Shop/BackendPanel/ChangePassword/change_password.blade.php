@extends('Shop.BackendPanel.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Chnage Password</h1>
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
                                        <form action="#" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="password" class="form-control" name="user_name">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>New Passoword</label>
                                                        <input type="password" class="form-control" name="email">
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Change Password">
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