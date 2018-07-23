<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
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

            'name'=> $this->name,

            'descriptions' => $this->detail,
            'price'=>$this->price,
            'stock'=> $this->stock,
            'discount' => $this->discount

        ];
    }
}
