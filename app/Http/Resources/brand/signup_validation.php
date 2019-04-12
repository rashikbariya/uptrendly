<?php

namespace App\Http\Resources\brand;

use Illuminate\Foundation\Http\FormRequest;

class signup_validation extends FormRequest
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'brand_name'=>'required|unique:ut_brand_info,brand_name',
            'brand_website_url'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
            'confirm-agreement'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'brand_name.required' => 'Brand name is required',
            'brand_website_url.required'  => 'Brand website is required',
            'first_name.required'  => 'First name is required',
            'last_name.required'  => 'Last name is required',
            'email.required'  => 'Email is required',
            'email.email'  => 'Must be a valid email',
            'password.required'  => 'Password is required',
            'password.min'=>'Password must be at least 8 characters',
            'confirm-agreement.required'=>'please confirm the agreement before you signup into the uptrendly as a brand',
        ];
    }


}
