<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;

class ProductController extends Controller {

    public function show( $product_slug ) {
        $product          = Product::where( 'product_slug', $product_slug )->first();
        $related_products = Product::where( 'product_category_id', $product->product_category_id )->where( 'product_slug', '!=', $product_slug )->limit( 3 )->get();
       
      return view( 'frontend.product-single', compact( 'product', 'related_products' ) );
    }

}
