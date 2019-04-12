<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodWill extends Model
{
    //
    protected $table ='ut_goodwill';

    protected $fillable = ['id',
        'goodwill_title', 'goodwill_status'
    ];


    public function goodwillvalue(){
        return $this->hasOne(GoodWillValue::class,'goodwill_id','id')
            ->orderBy('created_at','DESC');
    }
    public function goodwillvalueall(){
        return $this->hasMany(GoodWillValue::class,'goodwill_id','id')
            ->orderBy('created_at','DESC');
    }
   
}
