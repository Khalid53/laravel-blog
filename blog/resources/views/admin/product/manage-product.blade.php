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
                        <h4 class="text-success text-center">Product Table</h4>
                        <h5 class="text-success text-center">{{ Session::get('message') }}</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr class="bg-info">
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product )
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>TK. {{ $product->product_price }}</td>
                                    <td>{{ $product->product_quantity }}</td>
                                    <td>
                                        <img src="{{ asset($product->product_image) }}" alt="" height="100" width="150" />
                                    </td>
                                    <td>{{ $product->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        @if($product->publication_status == 1)
                                            <a href="{{ route('unpublished-product', ['id' =>$product->id ]) }}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up">Up</span>
                                            </a>
                                        @else
                                            <a href="{{ route('published-product', ['id' =>$product->id ]) }}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down">Down</span>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-product', ['id' =>$product->id ]) }}" class="btn btn-success">
                                            <span class="glyphicon glyphicon-edit">Edit</span>
                                        </a>
                                        <a href="{{ route('delete-product', ['id' =>$product->id]) }}" class="btn btn-danger" onclick=" return confirm('Are you sure to delete this !!') ">
                                            <span class="glyphicon glyphicon-trash">Delete</span>
                                        </a>
                                         <a href="{{ route('view-product', ['id' =>$product->id ]) }}" class="btn btn-info">
                                            <span class="glyphicon glyphicon-trash">View</span>
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
