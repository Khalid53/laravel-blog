@extends('admin.master')
@section('title')
    Add-Product
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-success">Add Product Form</h4>
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>

                        <div class="card-body">
                            {{ Form::open(['route' => 'new-product', 'metho'=>'POST', 'class'=>'horizontal', 'enctype' =>'multipart/form-data']) }}
                            <div class="form-group row">
                                <label class="control-label col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="category_id">
                                        <option>-------Select Category Name----------</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="brand_id">
                                        <option>-------Select Brand Name----------</option>
                                        @foreach($Brands as $Brand)
                                        <option value="{{ $Brand->id }}">{{ $Brand->brand_name }}</option>
                                         @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="product_name" class="form-control">
                                    <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input type="text" name="product_price" class="form-control">
                                    <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Product Quantity</label>
                                <div class="col-md-9">
                                    <input type="number" name="product_quantity" class="form-control">
                                    <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Product Short Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" name="product_short_description" class="form-control"></textarea>
                                    <span class="text-danger">{{ $errors->has('product_short_description') ? $errors->first('product_short_description') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Product Long Description</label>
                                <div class="col-md-9">
                                    <textarea type="text" id="editor" name="product_long_description" class="form-control"></textarea>
                                    <span class="text-danger">{{ $errors->has('product_long_description') ? $errors->first('product_long_description') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="product_image" accept="image/*" class="form-control">
                                    <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" checked name="publication_status" value="1"/> Published</label>
                                    <label><input type="radio"  name="publication_status" value="0"/> Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Save Product Info" class="btn btn-success btn-block" />
                                </div>
                            </div>


                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

