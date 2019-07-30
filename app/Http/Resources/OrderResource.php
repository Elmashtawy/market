<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'tax' => $this->tax,
            'shiping' => $this->shiping,
            'total_amount' => $this->total_amount,
            'user_id' => $this->user_id,
            
            'link' => url('/order/'.$this->id),
            
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
