<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
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
            
            'id' => $this->id,
            'tax' => $this->tax,
            'shiping' => $this->shiping,
            'total_amount' => $this->total_amount,
            'user_id' => $this->user_id,
            'products' => $this->products,
            
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
