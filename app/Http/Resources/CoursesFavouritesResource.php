<?php

namespace App\Http\Resources;

use App\Course;
use Illuminate\Http\Resources\Json\JsonResource;

class CoursesFavouritesResource extends JsonResource
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
            "coursesfavourites" => new CoursesResource($this->course),
            "created_at" => $this->deleted_at,
            "updated_at" => $this->updated_at
        ];
    }
}


/* 
    "id"=> 14,
            "user_id"=> 128,
            "course_id"=> 5,
            "created_at"=> "2023-05-13T09=>01=>37.000000Z",
            "updated_at"=> "2023-05-13T09=>01=>37.000000Z"
*/
