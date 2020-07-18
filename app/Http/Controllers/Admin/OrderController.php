<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {

    public function showOrder() {
        $orders = Order::orderBy( 'created_at', 'DESC' )->paginate( 10 );
        return view( 'admin.order.order', compact( 'orders' ) );
    }

    public function orderDetails( Order $order ) {

        return view( 'admin.order.order-detail', compact( 'order' ) );
    }

    public function updateOrder( Request $request, Order $order ) {
        $order->payment_status = $request->input( 'payment_status' );
        $order->save();

        return redirect()->back();
    }
}
