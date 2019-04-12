<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $table='ut_career';
    protected $fillable= ['title','description','status','sort_order','ended_date'];

}
