<?php

namespace App\Http\Resources\brand;

use Illuminate\Http\Resources\Json\JsonResource;

class signup extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

dd($request);

        return [
            'id'=>$this.id,
            'brand_name'=>$this.brand_name,
            'email'=>$this.email,
            'created_at'=>$this.created_at,
            'brand_website_url'=>$this.brand_website_url,
            'first_name'=>$this.first_name,
            'last_name'=>$this.last_name,
            'photo_name'=>$this.photo_name,
            'status'=>$this.status,
        ];
    }
}
