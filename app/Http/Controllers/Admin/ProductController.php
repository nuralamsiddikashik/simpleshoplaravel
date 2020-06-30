<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $products = Product::orderBy( 'created_at', 'DESC' )->paginate( 20 );
        return view( 'admin.product.index', compact( 'products' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $add_categories = ProductCategory::all();
        return view( 'admin.product.create', compact( 'add_categories' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {

        $this->validate( $request, [
            "product_title"             => "required",
            "product_image"             => "required",
            "product_price"             => "required",
            "product_sell_price"        => "required",
            "product_description"       => "required",
            "product_short_description" => "required",
            "product_qty"               => "required",
            "product_sku"               => "required",
            "product_category_id"       => "required",

        ] );

        $productAdd = new Product();

        $productAdd->product_title             = $request->product_title;
        $productAdd->product_slug              = Str::slug( $request->product_title, '-' );
        $productAdd->product_image             = "image.jpg";
        $productAdd->product_price             = $request->product_price;
        $productAdd->product_sell_price        = $request->product_sell_price;
        $productAdd->product_description       = $request->product_description;
        $productAdd->product_short_description = $request->product_short_description;
        $productAdd->product_qty               = $request->product_qty;
        $productAdd->product_sku               = $request->product_sku;
        $productAdd->product_category_id       = $request->product_category_id;

        if ( $request->has( 'product_image' ) ) {
            $product_image  = $request->product_image;
            $image_new_name = time() . '.' . $product_image->getClientOriginalExtension();
            $product_image->move( 'stroage/product/', $image_new_name );
            $productAdd->product_image = '/stroage/product/' . $image_new_name;
        }
        if ( $productAdd->save() ) {
            return redirect()->back();
        } else {
            dd( $errors->all() );
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Product $product ) {
        $categories = ProductCategory::all();
        return view( 'admin.product.edit', compact( 'product', 'categories' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Product $product ) {

        $this->validate( $request, [

            "product_title"             => "required",
            "product_price"             => "required",
            "product_sell_price"        => "required",
            "product_description"       => "required",
            "product_short_description" => "required",
            "product_qty"               => "required",
            "product_sku"               => "required",
            "product_category_id"       => "required",

        ] );

        $product->product_title             = $request->product_title;
        $product->product_price             = $request->product_price;
        $product->product_sell_price        = $request->product_sell_price;
        $product->product_description       = $request->product_description;
        $product->product_short_description = $request->product_short_description;
        $product->product_qty               = $request->product_qty;
        $product->product_sku               = $request->product_sku;
        $product->product_category_id       = $request->product_category_id;

        if ( $request->has( 'product_image' ) ) {
            $product_image  = $request->product_image;
            $image_new_name = time() . '.' . $product_image->getClientOriginalExtension();
            $product_image->move( 'stroage/product/', $image_new_name );
            $product->product_image = '/stroage/product/' . $image_new_name;
        }

        if ( $product->save() ) {
            return redirect()->route( 'product.index' );
        } else {
            dd( $errors->all() );
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
}
