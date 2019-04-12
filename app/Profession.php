<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    protected $table='ut_profession';

    protected $fillable=['title','description','status'];

}
