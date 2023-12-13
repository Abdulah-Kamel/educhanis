<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoursesResource extends JsonResource
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
            "title" => $this->title,
            "slug" => $this->slug,
            "description" => $this->description,
            "image" => $this->image,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "rate" => $this->rate,
            "category" => new CoursesResource($this->category),
            "price" => $this->price,
            "trainer" => new CoursesResource($this->trainer),
            "home" => $this->home,
            "learn" => $this->learn,
            "requirements" => $this->requirements,
            "type" => $this->type
        ];
    }
}
