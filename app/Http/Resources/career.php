<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class career extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this.id,
            'title'=>$this.title,
            'description'=>$this.description,
            'status'=>$this.status,
            'sort_order'=>$this.sort_order,
            'ended_date'=>$this.ended_date

        ];
    }
}
