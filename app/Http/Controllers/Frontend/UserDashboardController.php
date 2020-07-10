<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class UserDashboardController extends Controller {
    public function dashboard() {
        return view( 'frontend.dashboard.dashboard' );
    }

    public function checkout() {
        return view( 'frontend.dashboard.checkout' );
    }
}
