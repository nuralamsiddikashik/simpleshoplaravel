@extends('layouts.admin')
@section('content')
    
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mt-2">
            <div class="card-body">
               
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($order->order_details as $product_detail)
                        <tr>
                            <td>{{ $product_detail->product->product_title }}</td>
                            <td>{{ $product_detail->product->product_qty }}</td>
                            <td>{{ $product_detail->product->product_price}}</td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('update-order',$order->id)}}" method="post">
                    @csrf
                    @method('PUT')
                <table class="table">
                    <tbody>

                        <tr>
                            <th>Order Total</th>
                            <td>{{ $order->order_total}}</td>
                        </tr>

                        <tr>
                            <th>Payment Status</th>
                            <td>
                                <select name="payment_status" id="payment_status">
                                    <option {{ $order->payment_status == 'pending' ? "selected='selected'" : '' }} value="pending">Pending</option>

                                    <option {{ $order->payment_status == 'prosessing' ? "selected='selected'" : '' }} value="prosessing">Prosessing</option>

                                    <option {{ $order->payment_status == 'paid' ? "selected='selected'" : '' }} value="paid">Paid</option>
                                    <option {{ $order->payment_status == 'failed' ? "selected='selected'" : '' }} value="failed">Failed</option>
                                    <option {{ $order->payment_status == 'refund' ? "selected='selected'" : '' }} value="refund">Re-Fund</option>
                                </select>
                               
                            </td>
                        </tr>

                        <tr>
                            <th>order Status</th>
                            <td>{{ $order->order_total}}</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button type="submit">Update</button></td>
                        </tr>
                        
                    </tbody>
                </table>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection