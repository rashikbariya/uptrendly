<?php

namespace App\Http\Controllers\brand\billing;

use App\BrandPricing;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index(){
        $myCurrentDate = Carbon::now()->toDateString();
        $currentDate = Carbon::createFromFormat('Y-m-d',$myCurrentDate);
        $pricingData = BrandPricing::orderBy('change_date','ASC')->with('pricing')->where('user_id',Auth::guard('brand')->user()->id)->get();
        $data =[];
        foreach ($pricingData as $price)
        {
          if($price->from_date!=null){
              $data =[
                  'id'=> $price->id,
                  'pricing_status'=>$price->pricing_status,
                  'pricing_title'=>$price->pricing->pricing_title,
                  'price_per_month'=>$price->pricing->price_per_month,
                  'from_date'=>$price->from_date,
                  'to_date'=>$price->to_date,
                  'left_days'=>Carbon::createFromFormat('Y-m-d',$price->to_date)->diffInDays($currentDate) ,
                  'total_days'=>Carbon::createFromFormat('Y-m-d',$price->to_date)->diffInDays(Carbon::createFromFormat('Y-m-d',$price->from_date)),
              ];
          }
          else{
              $data =[
                  'id'=> $price->id,
                  'pricing_status'=>$price->pricing_status,
                  'pricing_title'=>$price->pricing->pricing_title,
                  'price_per_month'=>$price->pricing->price_per_month,

              ];
          }
        }


        return view('brand.billing.dashboard',compact('data','myCurrentDate'));

    }

}
