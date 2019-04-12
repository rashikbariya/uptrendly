<?php

namespace App\Http\Controllers\brand\billing;

use App\BrandPricing;
use App\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PlansController extends Controller
{
    //
    public function index(){


        $brandPriceId = 0;

        $pricingData = Pricing::orderBy('price_per_month','ASC')->where('status','1')->get();

        $brandPrice = BrandPricing::where('user_id',Auth::guard('brand')->user()->id)->get();


        foreach ($brandPrice as $brandPriceData){
            $brandPriceId = $brandPriceData->pricing_id;
        }

//        dd($pricingData);



        return view('brand.billing.plans',compact('pricingData','brandPriceId'));
    }

}
