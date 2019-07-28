<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IndexBestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

           return [

        'id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'photo' => $this->photo,
        'price' => $this->price,
        'quantity' => $this->quantity,
        'is_offer' => $this->is_offer,
        'offer' => $this->offer,
        'expire_offer' => $this->expire_offer,
        'selling' => $this->selling,
        'created_at' => $this->created_at,
      
        'link' => url('/product/'.$this->id) ,
        
        ];
    }

}
