@extends('admin.master')
@section('title')
    Add-Brand
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-success">Add Brand Form</h4>
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>

                        <div class="card-body">
                            {{ Form::open(['route' => 'new-brand', 'metho'=>'POST', 'class'=>'horizontal']) }}
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="brand_name" class="form-control">
                                        <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Brand Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="brand_description" class="form-control"></textarea>
                                        <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
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
                                    <input type="submit" name="btn" value="Save Brand" class="btn btn-success btn-block" />
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

