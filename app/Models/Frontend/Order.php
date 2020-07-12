<?php

namespace App\Models\Frontend;

use App\User;
use App\Models\Frontend\OrderDetail;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $guarded = [];

    public function user() {
        return $this->belongsTo( User::class );
    }

    public function order_details() {
        return $this->hasMany( OrderDetail::class );
    }

}
