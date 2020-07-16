<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Order;
use App\Models\Frontend\OrderDetail;
use Illuminate\Support\Collection;

class UserDashboardController extends Controller {

    public function dashboard() {
        return view( 'frontend.dashboard.dashboard' );
    }

    public function checkout() {

        if ( !count( CartController::get_cart() ) ) {
            return redirect()->intended( '/' );
        }

        $orderInfo                     = new Collection();
        $orderInfo->address_line_1     = '';
        $orderInfo->address_line_2     = '';
        $orderInfo->city               = '';
        $orderInfo->state              = '';
        $orderInfo->zip                = '';
        $orderInfo->country            = '';
        $orderInfo->different_shipping = '';
        $orderInfo->s_address_line_1   = '';
        $orderInfo->s_address_line_2   = '';
        $orderInfo->s_city             = '';
        $orderInfo->s_state            = '';
        $orderInfo->s_zip              = '';

        if ( auth()->check() ) {
            $order = Order::where( 'user_id', auth()->user()->id )->orderBy( 'created_at', 'DESC' )->first();

            if ( $order ) {
                $orderInfo = $order;
            }
        }

        return view( 'frontend.dashboard.checkout', compact( 'orderInfo' ) );
    }

    public function showOrder() {

        if ( auth()->user()->orders() ) {
            $orders = Order::where( 'user_id', auth()->user()->id )->orderBy( 'created_at', 'DESC' )->paginate( 10 );
        } else {
            $orders = array();
        }

        return view( 'frontend.dashboard.order', compact( 'orders' ) );
    }

    public function orderDetail( $id ) {
        $order_details = OrderDetail::where( 'order_id', $id )->get();
        // $order_details = OrderDetail::all();
        // dd( $order_details );
        return view( 'frontend.dashboard.order_detail', compact( 'order_details' ) );

    }

    public function userAccount() {
        return view( 'frontend.dashboard.account' );
    }

}
