<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class IndexCategoryResource extends JsonResource
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
        'name' => $this->name,
        'description' => $this->description,
        'link' => url('category/'.$this->id) ,
        
        ];
    }

   
}
