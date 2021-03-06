<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $coupon = Coupon::orderBy( 'created_at', 'DESC' )->paginate( 10 );
        return view( 'admin.coupon.index', compact( 'coupon' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.coupon.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {

        $request->validate( [
            'name'       => 'required',
            'code'       => 'required',
            'starts_at'  => 'required',
            'expires_at' => 'required',
            'amount'     => 'required',
            'max_uses'   => 'required',

        ] );

        $coupon              = new Coupon();
        $coupon->name        = $request->input( 'name' );
        $coupon->code        = $request->input( 'code' );
        $coupon->starts_at   = $request->input( 'starts_at' );
        $coupon->expires_at  = $request->input( 'expires_at' );
        $coupon->description = $request->input( 'description' );
        $coupon->status      = $request->input( 'status' );
        $coupon->is_fixed    = $request->input( 'is_fixed' );
        $coupon->amount      = $request->input( 'amount' );
        $coupon->max_uses    = $request->input( 'max_uses' );

        if ( $coupon->save() ) {
            return redirect()->route( 'coupon.index' );
        } else {
            return redirect()->back()->with( 'error', 'Please try again' );
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
    public function edit( Coupon $coupon ) {
        return view( "admin.coupon.edit", compact( 'coupon' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Coupon $coupon ) {

        $request->validate( [
            'name'       => 'required',
            'code'       => 'required',
            'starts_at'  => 'required',
            'expires_at' => 'required',
            'amount'     => 'required',
            'max_uses'   => 'required',
        ] );

        $coupon->name        = $request->input( 'name' );
        $coupon->code        = $request->input( 'code' );
        $coupon->starts_at   = $request->input( 'starts_at' );
        $coupon->expires_at  = $request->input( 'expires_at' );
        $coupon->description = $request->input( 'description' );
        $coupon->status      = $request->input( 'status' );
        $coupon->is_fixed    = $request->input( 'is_fixed' );
        $coupon->amount      = $request->input( 'amount' );
        $coupon->max_uses    = $request->input( 'max_uses' );

        if ( $coupon->save() ) {
            return redirect()->route( 'coupon.index' );
        } else {
            return redirect()->back( 'error', 'Please try again.' );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Coupon $coupon ) {
        if ( $coupon->delete() ) {
            return redirect()->route( 'coupon.index' );
        } else {
            return redirect()->back( 'error', 'Please try again.' );
        }
    }
}
