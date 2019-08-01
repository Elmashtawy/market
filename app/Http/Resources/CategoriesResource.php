<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResource extends JsonResource
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
        'link' => url('api/products/'.$this->id),
        
        
        ];
    }

    public function with($request)
    {
        
        return [
            'meta' => [
                'Status' => 'success',
                'Error' => 'No Errors Found',
            ],
        ];
    }
}
