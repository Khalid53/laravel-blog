@extends('admin.master')


@section('title')
    View-Product
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-success text-center">Product Details Page</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Sl No</th>
                                <td>{{ $productById->id }}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{ $productById->category_name }}</td>
                            </tr>
                            <tr>
                                <th>Brand Name</th>
                                <td>{{ $productById->brand_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $productById->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Price</th>
                                <td>TK. {{ $productById->product_price }}</td>
                            </tr>
                            <tr>
                                <th>Product Quantity</th>
                                <td>{{ $productById->product_quantity }}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{ $productById->product_short_description }}</td>
                            </tr>
                            <tr>
                                <th>Product Long Description</th>
                                <td>{{ $productById->product_long_description }}</td>
                            </tr>
                            <tr>
                                <th>Product image</th>
                                <td>
                                    <img src="{{ asset($productById->product_image) }}" alt="" height="100" width="150" />
                                </td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{ $productById->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            </tr>

                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('back-btn') }}" class="btn btn-success">Go Back to Product Table</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

