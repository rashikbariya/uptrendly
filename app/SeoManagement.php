<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoManagement extends Model
{
    //
    protected $table = 'ut_seo_setting';
    protected $fillable=['meta_title','meta_description','meta_keyword'];
}
