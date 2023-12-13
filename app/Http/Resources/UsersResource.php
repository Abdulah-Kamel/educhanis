<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            "role" => new UsersResource($this->role),
            "name" => $this->name,
            "email" => $this->email,
            "avatar" => $this->avatar,
            "telephone" => $this->telephone,
            "email_verified_at" => $this->email_verified_at,
            "settings" => $this->settings,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "provider" => $this->provider,
            "provider_name" => new UsersResource($this->provider_id),
            "parent" => new UsersResource($this->parent)
        ];
    }
}
