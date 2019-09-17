@extends('admin.master')


@section('title')
    Manage-Brand
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-success text-center">Brand Table</h4>
                        <h5 class="text-success text-center">{{ Session::get('message') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr class="bg-info">
                                <th>SL No</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php( $i=1 )
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $brand->brand_name }}</td>
                                    <td>{{ $brand->brand_description }}</td>
                                    <td>{{ $brand->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        @if($brand->publication_status == 1)
                                            <a href="{{ route('unpublished-brand', ['id' =>$brand->id]) }}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up">Up</span>
                                            </a>
                                        @else
                                            <a href="{{ route('published-brand', ['id' =>$brand->id]) }}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down">Down</span>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-brand', ['id' =>$brand->id]) }}" class="btn btn-success">
                                            <span class="glyphicon glyphicon-edit">Edit</span>
                                        </a>
                                        <a href="{{ route('delete-brand', ['id' =>$brand->id]) }}" class="btn btn-danger" onclick=" return confirm('Are you sure to delete this !!') ">
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
