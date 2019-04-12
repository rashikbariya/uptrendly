<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    //
    protected $table ='ut_general_setting';
    protected $fillable=['site_name','company_address','company_phone1','company_phone2','company_email','site_big_logo_path','site_small_logo_path'];
}
