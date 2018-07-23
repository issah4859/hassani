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
            'stock'=> $this->stock==0 ? 'Out of stock' : $this->stock,
            'totalPrice' =>round ((1-$this->discount/100) * $this->price, 2),
            'rating'=> $this->reviews->count() >0 ?round($this->reviews->sum('star')/$this->reviews->count(), 2): 'No reting yet',
            'href' =>[

                'reviews'=> route('reviews.index', $this->id)

            ]

        ];
    }
}
