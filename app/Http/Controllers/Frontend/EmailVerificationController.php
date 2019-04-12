<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailVerificationController extends Controller
{
    //


    public function verifiedEmail($user_id,$user_token){

        $status = '';

       $userData = User::findOrFail($user_id)->where('user_token',$user_token)->get();




      if(count($userData)>0){
         foreach ($userData as $user){
             $currentDate = date('Y-m-d H:i:s');

                 // dd($currentDate);
             $to = Carbon::createFromFormat('Y-m-d H:i:s', $currentDate);
             $from = Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at);

             $expiredTime = $diff_in_minutes = $to->diffInMinutes($from);
            // dd($expiredTime);

             if($user->status==4){
                 return redirect('/login');
             }
             elseif($expiredTime>1440){
                $status='expired';
             }
             elseif($user->status==2 && $expiredTime<1440){

                $userUpdateData = User::findOrFail($user_id);
                $userUpdateData->status = '4';
                $userUpdateData->save();
                 $status='verified';

             }
         }
         return view('landing.emailVerification',compact('status'));

      }

      else{
          return redirect('/login');
      }

    }
}
