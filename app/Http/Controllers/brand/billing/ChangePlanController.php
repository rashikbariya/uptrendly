<?php

namespace App\Http\Controllers\brand\billing;

use App\BrandPricing;
use App\Pricing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChangePlanController extends Controller
{
    //
    public function getPlan($id){


        $pricingData = Pricing::FindOrFail($id);
        $brandPricingData = BrandPricing::orderBy('change_date','ASC')->where('user_id',Auth::guard('brand')->user()->id)->get()->last();
        if($brandPricingData!=null){
            if($brandPricingData->pricing_status==1){

                return redirect('brand/billing/dashboard');
            }
        }
        return view('brand.billing.changeplan_subscription',compact('pricingData'));

    }

    public function changePlan(Request $request,$id){
        $request->validate([
            'total_month' => 'required',
        ]);
        $myCurrentDate = Carbon::now()->toDateString();
        $brandPricingData = BrandPricing::orderBy('change_date','ASC')->where('user_id',Auth::guard('brand')->user()->id)->get()->last();
        $pricingData = Pricing::findOrFail($id);

        if($brandPricingData==null){
            $addRenewPricingBrand = new BrandPricing();
        }
        else{
            $addRenewPricingBrand = $brandPricingData->pricing_status==3?$brandPricingData:new BrandPricing();
        }
            
            $addRenewPricingBrand->user_id = Auth::guard('brand')->user()->id;
            $addRenewPricingBrand->pricing_id = $id;
            $addRenewPricingBrand->pricing_status = '3';
            $addRenewPricingBrand->total_month = $request->total_month;
            $addRenewPricingBrand->amount_per_month = $request->total_month>1?(($request->total_month * $pricingData->price_per_month))-(($request->total_month * $pricingData->price_per_month)*0.10):$request->total_month * $pricingData->price_per_month;
            $addRenewPricingBrand->change_date = $myCurrentDate;
            if($addRenewPricingBrand->save()){
                return redirect('brand/billing/dashboard');
            }

        //dd($request->all());
    }
}
