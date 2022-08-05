@extends('Shop.BackendPanel.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add Prouduct</h1>
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
                                    <h4>Create New Product</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{ URL::to('shop-/save-products') }}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" class="form-control" name="product_name">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Categorey</label>
                                                        @php
                                                            $productCategories = App\Models\ProductCategory::where("user_id", Auth::user()->id ?? "1")->get();   
                                                        @endphp

                                                        <select class="form-control" name="p_categorey_name" required>
                                                            <option value="">Select Categorey</option>
                                                            @if(!empty($productCategories))
                                                                @foreach ($productCategories as $productCategory) 
                                                                    <option value="{{ $productCategory->id }}">{{ $productCategory->p_category_name }}</option>
                                                                @endforeach
                                                            @endif
                                                           
                                                        </select>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Brand</label>
                                                        @php
                                                            $brands = App\Models\Brand::where("user_id", Auth::user()->id ?? "1")->get();   
                                                        @endphp

                                                        <select class="form-control" name="brand_name" required>
                                                            <option value="">Select Categorey</option>
                                                            @if(!empty($brands))
                                                                @foreach ($brands as $brand) 
                                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                                @endforeach
                                                            @endif
                                                           
                                                        </select>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Brand</label>
                                                        @php
                                                            $labels = App\Models\Label::where("user_id", Auth::user()->id ?? "1")->get();   
                                                        @endphp

                                                        <select class="form-control" name="label_name" required>
                                                            <option value="">Select Label</option>
                                                            @if(!empty($labels))
                                                                @foreach ($labels as $label) 
                                                                    <option value="{{ $label->id }}">{{ $label->label }}</option>
                                                                @endforeach
                                                            @endif
                                                           
                                                        </select>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sale Price</label>
                                                        <input type="number" class="form-control" name="sale_price" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Discount Price</label>
                                                        <input type="number" class="form-control" name="discount_price" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Short Description</label>
                                                        <input type="text" class="form-control" name="short_description" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Thumbnail</label>
                                                        <input type="file" class="form-control" name="thumbnail" required>
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Create">
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