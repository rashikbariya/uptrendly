<?php

namespace App\Http\Resources\Rules\Admin;

use Illuminate\Foundation\Http\FormRequest;
class generalSetting extends FormRequest
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
            'site_name'=>'required|min:10|max:60',
            'company_address'=>'required|min:10|max:60',
            'company_phone1'=>'required|min:8|max:20',
            'company_email'=>'required|email',
            'site_small_logo_path'=>'required|max:500kb|Mimes:png|dimensions:width=512,height=512',
            'site_big_logo_path'=>'required|max:1024kb|Mimes:png|dimensions:width=1024,height=579'
            
        ];
    }

   


}
