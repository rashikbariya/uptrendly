<?php

namespace App\Http\Controllers\Influencer\Setting;

use App\SocialProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function Sodium\compare;

class LinkedAccountController extends Controller
{
    public  function getLinkedAccountData(){
        $user_id = Auth::id();
        $data = SocialProvider::where('user_id',$user_id)->get();
        $facebookData = [];
        $youtubeData = [];
        $instagramData = [];

        foreach ($data as $socialData){
            if($socialData->provider=='facebook'){
                $facebookData=[
                  'followers'=> $socialData->followers,
                    'social_avatar'=>$socialData->social_avatar,
                    'username'=>$socialData->username
                ];
            }
            elseif($socialData->provider=='google'){
                $youtubeData=[
                    'followers'=> $socialData->followers,
                    'social_avatar'=>$socialData->social_avatar,
                    'username'=>$socialData->username
                ];
            }
            elseif($socialData->provider=='instagram'){
                $instagramData=[
                    'followers'=> $socialData->followers,
                    'social_avatar'=>$socialData->social_avatar,
                    'username'=>$socialData->username
                ];
            }

        }


        return view('influencer.setting.linkedaccounts',compact('youtubeData','facebookData','instagramData'));
    }
}
