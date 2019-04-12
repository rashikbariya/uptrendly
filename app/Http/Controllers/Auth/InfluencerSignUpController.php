<?php

namespace App\Http\Controllers\auth;

use App\Category;
use App\Http\Resources\influencer_register_validation;
use App\InfluencerInfo;
use App\Mail\SendEmailVerificationCode;
use App\Profession;
use App\SocialProvider;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class InfluencerSignUpController extends Controller
{
    //
    public function secondView(){
        return view('landing.influencer_signup.audience_budget');
    }

    public function signUp(Request $request,$provider){



      if($request->page==''){
         return redirect('/influencer-signup/'.$provider.'?page=influencer-info');
      }
      elseif($request->page=='influencer-info'){

    
         // dd('influencer-info');
         $data= session()->get( 'data' );
       if($data!=null){
           $categoryData = Profession::where('status','Active')->get();
           if($data==null){
               return redirect('auth/facebook');
           }
           return view('landing.influencer_signup.influencer-info',compact('data','categoryData','provider'));
       }
       else{
           return redirect('auth/'.$provider);
       }
      }
      elseif($request->page=='audience-and-budget'){
            dd('ssss');
      }
        
        
    }
    public function errorMessage($message){
      if($message=='not_enough_followers' || $message=='email_already_exists' || $message=='email_not_found'){
          return view('landing.message_influencer_signup',compact('message'));
      }
      else{
          return redirect('/choose-social-account');
      }

    }

    public function register(influencer_register_validation $influencerValidation)
    {



        $user_id = 1;
        $user_password = Hash::make($influencerValidation->password);

        if(count(User::all())>0){
            $user_id=User::all()->last()->id + 1  ;
        }



        $user =[
            'id'=>$user_id,
            'remember_token'=>$influencerValidation->_token,
            'user_token'=>'asdasdasdasdasds',
            'email'=>$influencerValidation->email,
            'password'=>$user_password,
            'reg_ip'=>'127.0.0.1',
            'available_status'=>'0',
            'status'=>'2',
            'user_type'=>'1'
        ];

        $providerData=[
            'user_id'=>$user_id,
            'provider_id'=>$influencerValidation->provider_id,
            'provider'=>$influencerValidation->provider,
            'followers'=>$influencerValidation->follower
        ];

        $influencerData=[
            'user_id'=>$user_id,
            'firstname'=>$influencerValidation->firstname,
            'lastname'=>$influencerValidation->lastname,
            'avatar'=>$influencerValidation->avatar,
            'profession_id'=>$influencerValidation->profession_id,
            'username'=>$influencerValidation->username,
        ];

        // dd($brandPricingData);
        User::create($user);
        SocialProvider::create($providerData);
        InfluencerInfo::create($influencerData);

//        BrandPricing::created($brandPricingData);
        Session::flash('successMessage','Success');
        return redirect('/brand-signup-success');
    }
}
