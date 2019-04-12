<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    //
    //
    protected $table='ut_testimonials';

    protected $fillable=['fullname','description','status','photo_path','sort_order'];

    public function profession()
    {
        return $this->belongsTo(profession::class,'profession_id','id');
    }
}
