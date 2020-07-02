<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;

class CartController extends Controller {
    public function add_to_cart( Request $request ) {

        $productId  = $request->id;
        $productQty = $request->qty;

        $request->session()->put( 'cart.' . $productId . '.qty', $productQty );

        return response()->json( [
            'count' => self::total_in_cart(),
            'items' => self::cart_items(),
        ] );
    }

    public static function total_in_cart() {
        return session( 'cart' ) ? count( session( 'cart' ) ) : 0;
    }

    public static function cart_items() {
        $sProducts = new Product;
        if ( session( 'cart' ) && count( session( 'cart' ) ) > 0 ) {
            $p_ids     = array_keys( session( 'cart' ) );
            $sProducts = Product::whereIn( 'id', $p_ids )->get();
        }
        return $sProducts;

    }
}
