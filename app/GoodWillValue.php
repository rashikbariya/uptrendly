<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodWillValue extends Model
{
    //
    protected $table ='ut_goodwill_value';

    protected $fillable = [
        'goodwill_id', 'goodwill_amount'
    ];
}

