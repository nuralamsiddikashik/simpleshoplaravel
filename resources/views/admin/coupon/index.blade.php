@extends('layouts.admin')
@section('content')
   
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="m-0 text-dark">Manage Coupon</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="#">Coupon</a></li>
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
                                    <a class="btn btn-primary" href="{{ route('coupon.create')}}">Create Coupon</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Copun Name</th>
                                            <th>Copun Code</th>
                                            <th>Starts Date</th>
                                            <th>Expaire Date</th>
                                            <th>Description</th>
                                            <th>Coupon Status</th>
                                            <th>Fixed Amount</th>
                                            <th>Amount</th>
                                            <th>Max Uses</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupon as $coupon_item)
                                            <tr>
                                                <td>{{ $coupon_item->name}}</td>
                                                <td>{{ $coupon_item->code}}</td>
                                                <td>{{ $coupon_item->starts_at}}</td>
                                                <td>{{ $coupon_item->expires_at}}</td>
                                                <td>{{ $coupon_item->description}}</td>
                                                <td>{{ $coupon_item->status}}</td>
                                                <td>{{ $coupon_item->is_fixed}}</td>
                                                <td>{{ $coupon_item->amount}}</td>
                                                <td>{{ $coupon_item->max_uses}}</td>
                                                <td>
                                                    <a href="{{route('coupon.edit',[$coupon_item->id])}}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>

                                                    <form class="d-inline" action="{{ route('coupon.destroy',[$coupon_item->id ])}}" method="POST">
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