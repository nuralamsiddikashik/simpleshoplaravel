<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware( 'auth' );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $categories = ProductCategory::all();
        $products   = Product::orderBy( 'created_at', 'DESC' )->paginate( 20 );
        return view( 'frontend.index', compact( 'categories', 'products' ) );
    }

    public function shop() {
        return view( 'frontend.shop' );
    }

    public function showProduct( $category_slug ) {
        $category = ProductCategory::where( 'category_slug', $category_slug )->first();
        return view( "frontend.product-category", compact( "category" ) );
    }

    public function showSingleProduct( $product_slug ) {
        $product = Product::where( 'product_slug', $product_slug )->first();
        return view( 'frontend.product-single', compact( 'product' ) );
    }

    public function cart() {
        return view( 'frontend.cart' );
    }


}
