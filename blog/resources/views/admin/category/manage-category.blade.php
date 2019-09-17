@extends('admin.master')


@section('title')
    Manage-Category
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-success text-center">Category Table</h4>
                        <h5 class="text-success text-center">{{ Session::get('message') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr class="bg-info">
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php( $i=1 )
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>{{ $category->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                   @if($category->publication_status == 1)
                                    <a href="{{ route('unpublished-category', ['id' =>$category->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up">Up</span>
                                    </a>
                                    @else
                                        <a href="{{ route('published-category', ['id' =>$category->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down">Down</span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-category', ['id' =>$category->id]) }}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit">Edit</span>
                                    </a>
                                    <a href="{{ route('delete-category', ['id' =>$category->id]) }}" class="btn btn-danger" onclick=" return confirm('Are you sure to delete this !!') ">
                                        <span class="glyphicon glyphicon-trash">Delete</span>
                                    </a>
                                </td>
                            </tr>
                                @endforeach
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
