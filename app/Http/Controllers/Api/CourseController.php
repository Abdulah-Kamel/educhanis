<?php

namespace App\Http\Controllers\Api;

use App\Course;
use App\CourseFavourite;
use App\CourseRating;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseRatingsResource;
use App\Http\Resources\CoursesFavouritesResource;
use App\Http\Resources\CoursesResource;
use App\Trait\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class CourseController extends Controller
{
    use GeneralTrait;
    public function all_courses()
    {
        $courses = CoursesResource::collection(Course::all());

        return $this->returnData($courses, 'successfully', 200);
    }

    public function course_favourites(Request $request)
    {
        try {
            $token = JWTAuth::authenticate($request->token);
            $id_user = CourseFavourite::where('user_id', request()->user()->id)->get();
            $courseFavourite = CoursesFavouritesResource::collection($id_user);
            return $this->returnData($courseFavourite, 'successfully', 200);
        } catch (\Exception $ex) {
            return $this->returnData(null, $ex->getMessage(), 401);
        }
    }

    public function get_course_Favourite(Request $request)
    {
        $get_Course = Course::where('id', $request->id)->first();
        if ($get_Course) {
            return $this->returnData(new CoursesResource($get_Course), 'successfully get Course', 200);
        }
        return $this->returnData(false, 'Not Found Course', 400);
    }

    public function add_course_favourites(Request $request)
    {
        $course_id = Course::where('id', $request->id)->first();
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required'
            ]);

            if ($validator->fails()) {
                return $this->returnData('Error', $validator->errors()->toJson(), 400);
            }
            if ($course_id) {
                CourseFavourite::create([
                    'user_id' => request()->user()->id,
                    'course_id' => $request->id
                ]);
                return $this->returnData(true, 'Successfully Create Course Favourites', 201);
            }


            return $this->returnData(true, 'Not Found Courses', 401);
        } catch (\Exception $ex) {
            return $this->returnData(false, 'Exception Now', 400);
        }
    }

    public function delete_course_favourites(Request $request)
    {
        $delete = CourseFavourite::where('id', $request->id);
        if ($delete) {
            $delete->delete();
            return $this->returnData(true, 'successfully delete course favourites', 200);
        }
        return $this->returnData(false, 'Not Found course favourites', 401);
    }

    public function course_ratings(Request $request)
    {
        try {
            $token = JWTAuth::authenticate($request->token);
            $user_id = CourseRating::where('user_id', request()->user()->id)->get();
            $course_ratings = CourseRatingsResource::collection($user_id);
            return $this->returnData($course_ratings, 'successfully', 200);
        } catch (\Exception $ex) {
            return $this->returnData(null, $ex->getMessage(), 401);
        }
    }

    public function add_course_ratings(Request $request)
    {
        $course_id = Course::where('id', $request->id)->first();
        try {
            $validator = Validator::make($request->all(), [
                'rate' => 'numeric|min:1|max:5'
            ]);

            if ($validator->fails()) :
                return $this->returnData('Error', $validator->errors()->toJson(), 400);
            endif;
            if ($course_id) {
                CourseRating::updateOrCreate(
                    [
                        "user_id" => auth()->id(),
                        "course_id" => $request->id
                    ],
                    [
                        "rate" => $request->rate,
                    ]
                );
                return $this->returnData(true, 'successfully', 201);
            }
        } catch (\Exception $ex) {
            return $this->returnData(False, 'Not Found', 401);
        }
    }
}
