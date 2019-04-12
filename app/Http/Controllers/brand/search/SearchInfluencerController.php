<?php

namespace App\Http\Controllers\brand\search;

use App\InfluencerInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchInfluencerController extends Controller
{
    //
    public  function search(Request $request){
        $searchText = $request->influencer;

        $userIdArray = '';
        $countUserRow = 0;

        $influencerUserData = User::where('user_type','1')->where('status','1')->with('socailProvider')->get();

        foreach ($influencerUserData as $influencer){

            if($countUserRow==0){
                $userIdArray = $influencer->id ;
            }
            else{
                $userIdArray = $influencer->id . ','  . $userIdArray;
            }
            $countUserRow++;
        }

        $influencerInfo = InfluencerInfo::whereIn('user_id',explode(',',$userIdArray))->where('firstname','LIKE','%'.htmlspecialchars($searchText).'%')->orwhere('lastname','LIKE','%'.htmlspecialchars($searchText).'%')->with('profession')->paginate(9);



      // dd($influencerInfo);
        return view('brand.campaign.search',compact('searchText','influencerInfo','influencerUserData'));
    }


}
