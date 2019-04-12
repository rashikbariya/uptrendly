<?php

namespace App\Http\Controllers\Brand\Billing;

use App\BrandPricing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RenewSubscriptionController extends Controller
{

    public function renewPlan($id){



        $brandPricingData = BrandPricing::orderBy('change_date','ASC')->where('user_id',Auth::guard('brand')->user()->id)->get()->last();
       // dd($brandPricingData);

        if($brandPricingData->pricing_status==3 || $brandPricingData->pricing_status==1){
               return redirect('brand/billing/dashboard');
        }

        return view('brand.billing.renew_subscription');
    }
    public function addRenewPlan(Request $request,$id){
        $request->validate([
            'total_month' => 'required',
        ]);
        $myCurrentDate = Carbon::now()->toDateString();

        $brandPricingData = BrandPricing::findOrFail($id)->with('pricing')->get();

       foreach ($brandPricingData as $brandPricing){
           $addRenewPricingBrand = new BrandPricing();
           $addRenewPricingBrand->user_id = Auth::guard('brand')->user()->id;
           $addRenewPricingBrand->pricing_id = $brandPricing->pricing_id;
           $addRenewPricingBrand->pricing_status = '3';
           $addRenewPricingBrand->total_month = $request->total_month;
           $addRenewPricingBrand->amount_per_month =  $brandPricing->pricing->price_per_month;
           $addRenewPricingBrand->change_date = $myCurrentDate;
           if($addRenewPricingBrand->save()){
               return redirect('brand/billing/dashboard');
           }

       }

        //dd($request->all());
    }
}
