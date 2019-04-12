<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    protected $table='social_providers';
    protected $fillable=['user_id','provider_id','provider','followers','social_avatar','username'];
    //
    function users(){
      return  $this->belongsTo(User::class);
    }
}
