@extends('layouts.admin')
@section('content')
   
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">Coupon Edit</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Coupon</li>
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
                                <h3 class="card-title">Coupon List</h3>
                                <a class="btn btn-primary" href="{{ route('coupon.create') }}">Create Coupon</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Coupon Name</label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{ $coupon->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="code">Coupon Code</label>
                                        <input class="form-control" type="text" name="code" id="code" value="{{ $coupon->code }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="starts_at">Expaire Date</label>
                                        <input class="form-control datetimepicker" type="text" name="starts_at" id="starts_at" value="{{ $coupon->starts_at }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="expires_at">Expaire Date</label>
                                        <input class="form-control datetimepicker" type="text" name="expires_at" id="expires_at" value="{{ $coupon->expires_at }}">
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