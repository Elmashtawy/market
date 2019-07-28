<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
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
        'category_id' => $this->category_id,
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

    public function with($request)
    {
        
        return [
            
                'Status' => 'success',
                'Error' => 'No Errors Found',
            
        ];
    }

    
}
