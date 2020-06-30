@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Category</h1>
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
                            <a href="" class="btn btn-primary">Crate Category</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('product-category.store') }}" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('POST') }}
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="category_name">Name</label>
                                    <input class="form-control" type="text" id="category_name" name="category_name">
                                </div>

                                <div class="form-group">
                                    <label for="category_image">Image</label>
                                    <input type="file" name="category_image" id="category_image" class="form-control-file">
                                </div>

                                <div class="form-group">
                                    <select name="parent_id" id="parent_id">
                                        <option value="0">Select parent Category</option>
                                        @foreach($product_parent_category as $parent_category)
                                            <option value="{{ $parent_category->id }}">{{ $parent_category->category_name }}</option>
                                        @endforeach 
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="category_description">Description</label>
                                    <input class="form-control" type="text" id="category_description" name="category_description">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection