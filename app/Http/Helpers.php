<?php
class Helpers{
    public static function getBrandInfo(){
        //brand name
        //brand image
        $userId = Auth::id();
        $BrandList = \App\BrandInfo::where('user_id',$userId)->get();

        return $BrandList;


    }


    public static function getInfluencerInfo(){
        $userId = Auth::id();
        $influencerInfo=\App\InfluencerInfo::where('user_id',$userId)->get();
        return $influencerInfo;
    }


//    public static function getUsertype(){
//        $user= \App\User::findOrFail(Auth::id());
//
//        return $user->user_type;
//    }



    public  static function getPricing(){
        $userId= Auth::id();
        $pricingData = \App\BrandPricing::where('user_id',$userId)->orderBy('change_date','ASC')->get()->last();

        //dd($pricingData['pricing_id']);
        return $pricingData;
    }

    public static  function getUserID(){

        return Auth::id();
    }

    public  static  function getCategory(){
        return \App\Category::where('category_status','Active')->orderBy('category_name','ASC')->get();
    }

    public  static function checkUserStatus(){
        $user = \App\User::findOrfail(Auth::id());

        if($user->status=="2" || $user->status=="3"){
           return \Illuminate\Support\Facades\Redirect::to('/in')->withErrors('Your account has been suspended');
        }

    }
    public static  function getSeoManagementData(){
       $seoData = \App\SeoManagement::get()->last();
       return $seoData;
    }
    public static function getGeneralSettingData(){
        $generalSettingData = \App\GeneralSetting::get()->last();
        return $generalSettingData;
     }
     public static  function getSocialMediaData(){
       $seoData = \App\SocialMediaManagement::get()->last();
       return $seoData;
    }

}
