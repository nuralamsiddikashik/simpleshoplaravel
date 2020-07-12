<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $product_categories = ProductCategory::orderBy( 'created_at', 'DESC' )->paginate( 20 );
        return view( 'admin.product-category.index', compact( 'product_categories' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $product_parent_category = ProductCategory::where( 'parent_id', 0 )->get();

        return view( 'admin.product-category.create', compact( 'product_parent_category' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {

        $this->validate( $request, [
            "category_name" => "required",

        ] );

        $productCategory = new ProductCategory();

        $productCategory->category_name        = $request->category_name;
        $productCategory->category_image       = 'image.jpg';
        $productCategory->category_description = $request->category_description;
        $productCategory->parent_id            = $request->parent_id;
        $productCategory->category_slug        = Str::slug( $request->category_name, '-' );

        if ( $request->has( 'category_image' ) ) {
            $category_image = $request->category_image;
            $image_new_name = time() . '.' . $category_image->getClientOriginalExtension();
            $category_image->move( 'stroage/category/', $image_new_name );
            $productCategory->category_image =  $image_new_name;
        }
        $productCategory->save();

        return redirect()->back();
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
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( ProductCategory $product_category ) {
        if ( $product_category ) {
            if ( file_exists( public_path( $product_category->category_image ) ) ) {
                unlink( public_path( $product_category->category_image ) );
            }
            $product_category->delete();
        }
        return redirect()->back();
    }
}
