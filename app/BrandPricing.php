<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandPricing extends Model
{
    //
    protected $table='ut_brand_pricing';
    protected $fillable=['from_date'];

    public function pricing(){
        return $this->belongsTo(Pricing::class,'pricing_id','id');
    }





}
