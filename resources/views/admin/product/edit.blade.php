@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Product Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
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
                            <h3 class="card-title">Product List</h3>
                            <a href="{{ route ('product-category.create') }}" class="btn btn-primary">Create Product</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('product.update',[ $product->id ])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                
                                <div class="form-group">
                                    <select class="form-control" name="product_category_id" id="product_category_id">
                                        <option value="">Selected</option>
                                        @foreach($categories as $c)
                                            <option value="{{ $c->id}}" @if($product->product_category_id == $c->id) selected @endif>{{ $c->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="product_title">Product Title</label>
                                    <input class="form-control" type="text" id="product_title" name="product_title" value="{{ $product->product_title }}">
                                </div>

                                <div class="form-group">
                                   <div class="row">
                                       
                                        <div class="col-md-8">
                                           <label for="product_image">Image</label>
                                           <input type="file" name="product_image" id="product_image" class="form-control">
                                       </div>

                                       <div class="col-md-4">
                                            <div class="image-r">
                                                <img src="{{ asset( $product->product_image )}}" alt="">
                                            </div>
                                       </div>
                                   </div>
                                </div>

                                <div class="form-group">
                                    <label for="product_price">Product Price</label>
                                    <input class="form-control" type="text" name="product_price" id="product_price" value="{{ $product->product_price }}">
                                </div>

                                <div class="form-group">
                                    <label for="product_sell_price">Product Sell Price</label>
                                    <input class="form-control" type="text" name="product_sell_price" id="product_sell_price" value="{{ $product->product_sell_price }}">
                                </div>

                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <input class="form-control" type="text" name="product_description" id="product_description" value="{{ $product->product_description }}">
                                </div>

                                <div class="form-group">
                                    <label for="product_short_description">Product Short Description</label>
                                    <input class="form-control" type="text" name="product_short_description" id="product_short_description" value="{{ $product->product_short_description}}">
                                </div>

                                <div class="form-group">
                                    <label for="product_qty">Product QTY</label>
                                    <input class="form-control" type="text" id="product_qty" name="product_qty" value="{{ $product->product_qty }}">
                                </div>

                                <div class="form-group">
                                    <label for="product_sku">Product SKU</label>
                                    <input class="form-control" type="text" id="product_sku" name="product_sku" value="{{ $product->product_sku }}">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

