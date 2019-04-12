<?php

namespace App\Http\Controllers\brand\setting;

use App\BrandPricing;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PricingHistoryController extends Controller
{
    //

    protected function getPricingPaiddata()
    {

        $priceingPaidData = BrandPricing::where('user_id',\Helpers::getUserID())->where('pricing_status',1)->get();
       // dd($priceingPaidData);
        return view ('brand.setting.pricing_history',compact('priceingPaidData'));
    }


}
