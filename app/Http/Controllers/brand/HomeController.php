<?php

namespace App\Http\Controllers\brand;

use App\BrandPricing;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Helpers;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

//        $userId = Auth::id();
 //   dd( Helpers::getBrandInfo());


       $data = $this->pricingSection();
        $influencerData= $this->newInfluecnerofWeek();

       // dd($influencerData);




        return view('brand.index',compact('data','influencerData'));
    }


    protected function pricingSection()
    {

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
        return $data;
    }

    protected function newInfluecnerofWeek()
    {
        $todayDate = Carbon::createFromFormat('Y-m-d',date('Y-m-d'));
        $oneWeekDate = Carbon::createFromFormat('Y-m-d',date('Y-m-d'))->subDays(8) ;

        $influencerData = User::where('user_type','1')->where('status','1')->with('socailProvider','influencer_info')->whereBetween('verified_date',[$oneWeekDate,$todayDate])->get();

        return $influencerData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
