@extends('admin.master')
@section('title')
    Update-Category
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-success">Update Category Form</h4>
                        <div class="card-body">
                            <form action="{{ route('update-category') }}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control" />
                                        <input type="hidden" name="category_id" value="{{ $category->id }}" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea type="text" name="category_description" class="form-control" />{{ $category->category_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Publication Status</label>
                                    <div class="col-md-9 radio">
                                        <label><input type="radio"  name="publication_status" {{ $category->publication_status == 1 ? 'checked' : '' }} value="1" />Published</label>
                                        <label><input type="radio"  name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0" />Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Category" />
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

































