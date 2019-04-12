<?php

namespace App\Http\Resources;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class influencer_register_validation extends FormRequest
{


    public function authorize()
    {
        return true;
    }


   public function rules(){

        return[
            'username'=>'required|unique:ut_influencer_info,username',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'email|required|unique:users,email',
            'password'=>'min:8|required',

        ];


   }

//   public function messages()
//   {
//       return[
//           'username.required'=>'Username field is required'
//       ];
//   }


}
