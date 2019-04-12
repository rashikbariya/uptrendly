<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StaffInfo extends Authenticatable
{
    //

    use Notifiable;
    protected  $fillable = ['fullname','email','phone_number','dob','designation','photo_path','linkedin_url','status','sort_order','password','hash_password'];
    protected $table ="ut_staff_information";
}
