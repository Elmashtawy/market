<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CartCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            
            'products' => CartResource::collection($this->collection),
            
            
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
