<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfluencerInfo extends Model
{
    //
    protected $table ='ut_influencer_info';
    protected $fillable=['firstname','lastname','user_id','profession_id','avatar','username','target_audience_gender','target_audience_age','interested_for'];


    public  function profession(){
        return $this->belongsTo(Profession::class,'profession_id','id');
    }

    public function socailProvider(){
        return $this->belongsTo(SocialProvider::class,'user_id','user_id');
    }

    public function goodwill(){
        return $this->hasOne(GoodWill::class,'goodwill_id','id');
    }



}
