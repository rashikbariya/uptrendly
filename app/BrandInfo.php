<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandInfo extends Model
{
    //
    protected $table='ut_brand_info';
    protected $fillable=['id',
     'user_id','brand_name','brand_website_url','first_name','last_name','photo_name','new_status'
    ];


    public function user(){
       return $this->belongsTo(User::class,'user_id','id');
    }







}
