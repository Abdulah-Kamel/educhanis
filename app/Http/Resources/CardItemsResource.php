<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CardItemsResource extends JsonResource
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
            "id" => $this->id,
            "user" => new UsersResource(request()->user()),
            "product" => new CardItemsProductsResource($this->product),
            "qty" => $this->qty,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "final_price" => $this->final_price
        ];
    }
}
