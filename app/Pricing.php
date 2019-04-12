<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    //
    protected $table='ut_pricing';
    protected $fillable=['pricing_title','price_per_month','status'];
}
