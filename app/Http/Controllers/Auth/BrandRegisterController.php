<?php

namespace App\Http\Controllers\Auth;

use App\BrandInfo;
use App\BrandPricing;
use App\Http\Resources\brand\signup_validation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BrandRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        return view('landing.brand_signup');
        //
    }

    public function register(signup_validation $signup_validation){

        $user_password = Hash::make($signup_validation->password);
//        dd($user_password);
            $user_id = 1;
         if(count(User::all())>0){
             $user_id=User::all()->last()->id + 1  ;
         }
         $brandUserDetails =[
             'id'=>$user_id,
             'email'=>$signup_validation->email,
             'password'=>$user_password,
             'reg_ip'=>'127.0.0.1',
             'available_status'=>'0',
             'status'=>'2',
             'user_type'=>'0',
             'remember_token'=>$signup_validation->_token,
             'user_token'=>Hash::make($signup_validation->email),
         ];

        $brandSignUpData = [
            'user_id'=>$user_id,
            'brand_name'=>$signup_validation->brand_name,
            'brand_website_url'=>$signup_validation->brand_website_url,
            'first_name'=>$signup_validation->first_name,
            'last_name'=>$signup_validation->last_name,
        ];

       // dd($brandPricingData);
        User::create($brandUserDetails);
        BrandInfo::create($brandSignUpData);
//        BrandPricing::created($brandPricingData);
        Session::flash('successMessage','Success');
        return redirect('/brand-signup-success');
    }

}
