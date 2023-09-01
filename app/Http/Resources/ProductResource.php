<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'price' => $this->price,
            'discount' => $this->discount,
            'qty_import' => $this->qty_import,
            'qty_sold' => $this->qty_sold,
            'description' => $this->description,
            'detail' => $this->detail,
            'rate' => $this->rate,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'slug' => $this->slug,
            'status' => $this->status,
            'images' => $this->images,
            'product_tags' => ProductTagResource::collection($this->productTags),
        ];
    }
}