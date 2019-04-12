<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class testimonial extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' =>$this->id,
            'fullname' =>$this->fullname,
            'description' =>$this->description,
            'profession_id' =>$this->profession_id,
            'photo_path' =>$this->photo_path,
            'sort_order' =>$this->sort_order,
            'status'=>$this->status,
            'profession'=>$this->profession,

        ];
    }




}
