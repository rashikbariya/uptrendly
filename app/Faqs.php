<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    //
    protected $table ='ut_faqs';
    protected $fillable=['question','answer','sort_order','status'];
}
