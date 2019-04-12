<?php

namespace App\Http\Controllers\Auth;

use App\SocialProvider;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {


        return Socialite::driver($provider)->redirect();
    }





    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */

    public function handleProviderCallback($provider)
    {

//dd(Auth::guard('influencer')->user());

  try{


      $user = Socialite::driver($provider)->stateless()->user();


  }catch (\Exception $e){
      return redirect('auth/'.$provider);
    }



        $userData=[];
    if($provider=='instagram'){
        $userData=[
            'provider'=>$provider,
            'id'=>$user->user['id'],
            'username'=>$user->user['username'],
            'avatar'=>$user->user['profile_picture'],
            'follower'=>$user->user['counts']['followed_by'],
            'email'=>$user->getEmail(),
        ];

    }
    elseif ($provider=='facebook'){
        $userData=[
            'provider'=>$provider,
            'id'=>$user->getid(),
            'username'=>'Dummy Data',
            'avatar'=>$user->getAvatar(),
            'follower'=>'120',
            'email'=>$user->getEmail()
        ];
    }
    elseif ($provider=='google'){
        $userData=[
            'provider'=>$provider,
            'id'=>$user->getId(),
            'username'=>'Dummy Data',
            'avatar'=>$user->getAvatar(),
            'follower'=>'1000',
            'email'=>$user->getEmail()
        ];
    }

        $userSocialProvider = SocialProvider::where('provider_id',$userData['id'])->where('provider',$provider)->get();
         if(count($userSocialProvider)<1){

             if($userData['follower']>50){


                 if(Auth::guard('influencer')->user() == null)
                 {
                     return redirect()->to( 'influencer-signup/'.$provider.'?page=influencer-info' )->with( [ 'data' => $userData ] );

                 }else{

                     $saveSocialData =$this->addNewSoicalLinked($userData,Auth::guard('influencer')->user()->id);
                    if($saveSocialData==1){
                      return redirect()->back();
                    }
                    else{
                        dd('ssssss');
                    }
                 }
             }
             else{


                 if(Auth::guard('influencer')->user() == null)
                 {
                     return redirect()->to( 'influencer-signup/error/not_enough_followers' );
                 }else{
dd('sss');
                 }

             }
         }
         else{

             if(Auth::guard('influencer')->user() == null)
             {
                 return redirect()->to( 'influencer-signup/error/email_already_exists' );
             }
             else{
dd('dddd');
             }

         }






    }



    public function addNewSoicalLinked($userData,$user_id){


        //dd($userData);

        $data = [
            'user_id'=>$user_id,
            'provider_id'=>$userData['id'],
            'provider'=>$userData['provider'],
            'followers'=>$userData['follower'],
            'social_avatar'=>$userData['avatar'],
            'username'=>$userData['username'],

        ];
      if(SocialProvider::create($data)){
          return 1;
      }
      else{
          return 0;
      }


    }



}
