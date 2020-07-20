<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class SearchController extends Controller {

    public function index( Request $request ) {
        $searchProduct = Product::where( 'product_title', 'like', '%' . $request->input( 'product_title' ) . '%' )->get();

        $output = '';

        $output .= '<div class="container"><div class="row">';
        foreach ( $searchProduct as $search ) {
            $output .= '<div class="col-md-12">' . $search->product_title . '</div>';
        }
        $output .= '</div></div>';

        return $output;
    }

}
