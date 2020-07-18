@extends('layouts.admin')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Order</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"></li>
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
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th>Email Address</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>Total Price</th>
                                    <th style="width:120px">Action</th>
                                </tr>
                            </thead>
                           <tbody>
                               @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->user->email }}</td>
                                    <td>{{ucfirst($order->order_status)}}</td>
                                    <td>{{ ucfirst($order->payment_status)}}</td>
                                    <td>{{ $order->order_total}}</td>
                                    <td><a href="{{ route('show-order-details',$order->id)}}">View</a></td>
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