<?php

namespace App\Http\Controllers\Influencer;

use App\InfluencerInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BrandInfo;

class SearchBrandController extends Controller
{
    //

    public  function fetchallbranddata(Request $request){


        $searchText = $request->search_brandName;
       // dd($aa);


       if(isset($searchText)){
        $brandList = User::where('user_type',1)->where('status',1)->with('brandInfo')->paginate(12);
        return view('influencer.campaign.search',compact('brandList'));
       }

        $brandList = User::where('user_type',1)->where('status',1)->with('brandInfo')->paginate(12);
        return view('influencer.campaign.search',compact('brandList'));
         
           
          
    }

    public  function search(Request $request){

        dd($request->all());


     $brandName =$request->brand_name;

     if($brandName==''){
         
        return redirect('influencer/search');
     }

   

    $brandList = BrandInfo::where('brand_name','like',$brandName.'%')->get();
            return view('influencer.campaign.search',compact('brandName','brandList'));
      
        
       
    }


}
