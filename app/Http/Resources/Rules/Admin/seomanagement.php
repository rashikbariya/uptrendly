<?php

namespace App\Http\Resources\Rules\Admin;

use Illuminate\Foundation\Http\FormRequest;

class seomanagement extends FormRequest
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
            'meta_title'=>'required|min:10|max:60',
            'meta_description'=>'required|min:50|max:300',
            'meta_keyword'=>'required'
        ];
    }


}
