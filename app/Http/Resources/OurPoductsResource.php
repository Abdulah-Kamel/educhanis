<?php

namespace App\Http\Resources;

use App\PCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class OurPoductsResource extends JsonResource
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
            "name" => $this->name,
            "price" => $this->price,
            "image" => $this->image,
            "images" => $this->images,
            "category" =>  new P_categoryResource($this->category),
            "description" => $this->description,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "slug" => $this->slug,
            "brief" => $this->brief,
            "qty" => $this->qty

        ];
    }
}
