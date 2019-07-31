<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            
            'pivotId'=> $this->id,
            'Delete'=> url('api/cart/delete/'.$this->id),
            'productcart' => $this->product,
            
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
