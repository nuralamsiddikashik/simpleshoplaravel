<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon;
use Illuminate\Http\Request;
use session;

class CouponController extends Controller {

    public function isValidCoupon( $coupon_code ) {
        $coupon = Coupon::where( 'code', $coupon_code )->first();

        if ( !$coupon ) {
            return false;
        }

        if ( $coupon->starts_at > date( 'Y-m-d H:i:s' ) ) {
            return false;
        }

        if ( $coupon->expires_at <= date( 'Y-m-d H:i:s' ) ) {
            return false;
        }

        if ( $coupon->status == false ) {
            return false;
        }

        if ( $coupon->used >= $coupon->max_uses ) {
            return false;
        }

        if ( CartController::total_in_cart() == 0 ) {
            return false;
        }

        return true;

    }

    public function addCoupon( Request $request ) {

        $request->validate( [
            'coupon_code' => 'required',
        ] );

        if ( $this->isValidCoupon( $request->input( 'coupon_code' ) ) ) {
         
            session()->put( 'coupon', $request->input( 'coupon_code' ) );

            if ( session()->has( 'coupon' ) ) {
                return redirect()->back()->with( 'success', 'Add Coupon' );
            }
            return redirect()->back()->with( 'error', 'Something went worng' );
        }

        return redirect()->back()->with( 'error', 'Something went worng' );

    }
}
