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
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Category Description</th>
                                    <th>Category Slug</th>
                                    <th>Parent Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_categories as $product_category_items)
                                    
                                <tr>
                                    <td>{{$product_category_items->id}}</td>
                                    <td>{{$product_category_items->category_name}}</td>

                                    <td>
                                        <div style="max-width: 70px; max-height:70; overflow:hidden"><img class="img-fluid" src="{{ asset( $product_category_items->category_image ) }}"></div>
                                    </td>

                                    <td>{{ $product_category_items->category_description }}</td>
                                    <td>{{ $product_category_items->category_slug }}</td>
                                    @if($product_category_items->parent_id == 0)
                                        <td></td>
                                    @else 
                                        <td>{{ $product_category_items->parent_id }}</td>
                                    @endif 
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit">Edit</i></a>
                                      
                                        <form action="{{ route('product-category.destroy',[$product_category_items->id ]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
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