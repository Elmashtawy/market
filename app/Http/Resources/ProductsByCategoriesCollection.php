<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsByCategoriesCollection extends ResourceCollection
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

        'Product_By_CatID' => ProductsResource::collection($this->collection),
            
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
