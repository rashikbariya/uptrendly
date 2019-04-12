<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    //

    protected $fillable=['staff_id','date','o_start_time','o_end_time','l_start_time','l_end_time','task','details'];
    protected $table='ut_daily_report';



}
