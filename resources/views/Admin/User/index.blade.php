@extends('Admin.layouts.app')
@section('title', 'Users')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('Users') }}</h2>
                            <span class="float-right">
                                {{-- <a href="{{ url('admin/create-user') }}" class="btn btn-primary text-white">Create User</a> --}}
                        </span>




                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        @if(Session::has('message'))
                                            <span class="message text-weight-bold text-white bg-success" style="padding:5px">{{ Session::get('message') }}</span>
                                        @endif

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="" class="text-center">{{ __('Name') }}</th>
                                                        <th style="" class="text-center">{{ __('Email') }}</th>
                                                        <th style="" class="text-center">{{ __('Role') }}</th>
                                                        <th style="" class="text-center">{{ __('Status') }}</th>
                                                        <th style="" class="text-center">{{ __('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!empty($users))
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td class="text-center">{{ $user->name  }}</td>
                                                            <td class="text-center">{{ $user->email }}</td>
                                                            <td class="text-center">{{ $user->role }}</td>
                                                            @if($user->publication_status == "1")
                                                                <td class="text-center">Active</td>
                                                            @else 
                                                                <td class="text-center">De Active</td>
                                                            @endif
                                                            <td class="text-center">
                                                                <div class="btn-group">
                                                                    @if($user->publication_status == "1")
                                                                    <a class="btn btn-danger btn-sm Login  text-white" href="{{ url('admin/user-deactive', $user->id) }}">De Active</a>
                                                                    @else
                                                                    <a class="btn btn-success btn-sm Login  text-white" href="{{ url('admin/user-active', $user->id) }}">Active</a>

                                                                    @endif
                                                                </div>
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                    @endif



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
