@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Product Category List Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                 </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Category List</h3>
                            <a href="{{ route ('product-category.create') }}" class="btn btn-primary">Crate Category</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Sell Price</th>
                                    <th>QTY</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th style="width:120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->product_title}}</td>
                                  
                                    <td>
                                        <div style="max-width: 70px; max-height:70;">
                                            <img class="img-fluid" src="{{ asset( $product->product_image )}}">
                                        </div>
                                    </td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_sell_price }}</td>
                                    <td>{{ $product->product_qty }}</td>
                                    <td>{{ $product->product_sku }}</td>
                                    <td>{{ $product->product_categories->category_name }}</td>
                                    <td>
                                        <a href="{{ route('product.edit', [ $product->id ])}}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                      
                                        <form class="d-inline" action="" method="POST">
                                            {{-- @method('DELETE')
                                            @csrf --}}
                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection