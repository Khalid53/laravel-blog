@extends('admin.master')
@section('title')
    Add-Category
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-success">Add Category Form</h4>
                        <h5 class="text-center text-success">{{ Session::get('message') }}</h5>

                        <div class="card-body">
                            <form action="{{ route('new-category') }}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="category_description" class="form-control" /></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Publication Status</label>
                                    <div class="col-md-9 radio">
                                        <label><input type="radio" checked name="publication_status" value="1" />Published</label>
                                        <label><input type="radio" name="publication_status" value="0" />Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-primary btn-block" value="Save Category" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

































