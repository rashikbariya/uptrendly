<?php

namespace App\Http\Controllers\Frontend;

use App\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing = Pricing::where('status','1')->orderBy('price_per_month','ASC')->get();
        return view('landing.pricing',compact('pricing'));
    }


}
