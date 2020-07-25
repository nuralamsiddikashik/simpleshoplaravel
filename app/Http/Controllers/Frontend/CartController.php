<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Coupon;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Services\CartService;
use App\Http\Controllers\Controller;

class CartController extends Controller {
    public function add_to_cart( Request $request ) {

        $productId  = $request->id;
        $productQty = $request->qty;

        $request->session()->put( 'cart.' . $productId . '.qty', $productQty );

        return response()->json( [

            'count'    => self::total_in_cart(),
            'items'    => self::cart_items(),
            'subtotal' => self::subTotal(),
            'markup'   => self::getMarkUp(),
        ] );
    }

    public static function total_in_cart() {
        return session( 'cart' ) ? count( session( 'cart' ) ) : 0;
    }

    public static function cart_items() {
        $sProducts = [];
        if ( session( 'cart' ) && count( session( 'cart' ) ) > 0 ) {
            $p_ids     = array_keys( session( 'cart' ) );
            $sProducts = Product::whereIn( 'id', $p_ids )->get();
        }
        return $sProducts;

    }

    public static function subTotal() {
        $products = self::cart_items();
        $subTotal = 0;
        if ( count( $products ) ) {
            foreach ( $products as $product ) {
                $subTotal += $product->finalPrice() * session( 'cart' )[$product->id]['qty'];
            }
        }
        return sprintf( "%0.2f", $subTotal );
    }

    public static function cartFinalPrice() {

        $subTotal = self::subTotal();
        $tax      = 0;
        $shippingCharge = 0;

        // Coupon Discount 
        $couponAmount = self::coupon_discount_amount();

        $total = $subTotal + $tax + $shippingCharge - $couponAmount;
        return $total;

    }

    public static function coupon_discount_amount() {
        $couponCode = session( 'coupon' );
        $coupon     = Coupon::where( 'code', $couponCode )->first();

        if ( $coupon ) {
            return $coupon->amount;
        }

        return 0;
    }

    

    public static function getMarkUp() {

        $products    = self::cart_items();
        $cartService = new CartService;

        return $cartService->mini_cart_markup( $products );
    }

    public function showCartPage() {
        if ( self::total_in_cart() > 0 ) {
            return view( 'frontend.cart' );
        } else {
            return redirect()->back();
        }
    }

    public function remove_from_cart( Request $request ) {

        if ( session( 'cart' ) && count( session( 'cart' ) ) > 0 ) {
            session()->forget( 'cart.' . $request->id );
        }

        return response()->json( [

            'count'    => self::total_in_cart(),
            'items'    => self::cart_items(),
            'subtotal' => self::subTotal(),
            'markup'   => self::getMarkUp(),
        ] );

    }

    public static function get_cart() {

        if ( session()->has( 'cart' ) ) {
            return session( 'cart' );
        } else {
            return array();
        }
    }

}
