<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'password', 'reg_ip','status','available_status','user_type','remember_token','user_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    function influencer_info(){
        return $this->hasOne(InfluencerInfo::class)->with('profession','goodwill');
    }

    function socailProvider(){
        return $this->hasMany(SocialProvider::class);
    }

    function brandInfo(){
        return $this->hasOne(BrandInfo::class)->orderBy('brand_name','ASC');
    }
    function brandPricing(){
        return $this->hasOne(BrandPricing::class)->where('pricing_status',1);
    }

}
