<?php

namespace App\Http\Controllers\brand\billing;

use App\BrandPricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentHistoryController extends Controller
{
    //
    public function index(){
        $historyData = BrandPricing::orderBy('to_date','DESC')->where('user_id',Auth::guard('brand')->user()->id)->with('pricing')->paginate(10);
        return view('brand.billing.paymenthistory',compact('historyData'));
    }

}
