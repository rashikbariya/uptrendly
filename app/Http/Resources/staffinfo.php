<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class staffinfo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {



//        return[
//            'id'=>$this->id,
//            'fullname'=>$this->fullname,
//            'email'=>$this->email,
//            'phone_number'=>$this->phone_number,
//            'dob'=>$this->dob,
//            'designation'=>$this->designation,
//            'photo_path'=>$this->photo_path,
//            'linkedin_url'=>$this->linkedin_url,
//            'hash_password'=>$this->hash_password,
//            'status'=>$this->status,
//            'sort_order'=>$this->sort_order
//        ];

        return parent::toArray($request);
    }
}
