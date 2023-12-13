<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\NewController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OurServiceController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\WishListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

    // ################################ courses ################################
    Route::get('/courses', [CourseController::class, 'all_courses']);

    // ################################## News ##################################
    Route::get('getNews', [NewController::class, 'news']);
    Route::post('getNews/{id}', [NewController::class, 'get_news']);

    // ############################### Our Service ###############################
    Route::get('services', [OurServiceController::class, 'get_services']);
    Route::post('service/{id}', [OurServiceController::class, 'service']);

    // ############################### Our Products ###############################
    Route::get('products', [ProductController::class, 'get_products']);

    // ##################### Start Verify Authenticate Token  #####################

    Route::group(['middleware' => ['jwt.verify']], function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/refresh', [AuthController::class, 'refresh']);
        Route::post('/get_user', [AuthController::class, 'get_user']);

        // ######################### course Favourites Auth ########################
        Route::post('/courseFavourites', [CourseController::class, 'course_favourites']);
        Route::post('/addCourseFavourites', [CourseController::class, 'add_course_favourites']);
        Route::post('/getcourseFavourite', [CourseController::class, 'get_course_Favourite']);
        Route::post('/deleteCourseFavourites', [CourseController::class, 'delete_course_favourites']);

        // ######################### course Ratings Auth ###########################
        Route::post('/courseRatings', [CourseController::class, 'course_ratings']);
        Route::post('/addCourseRatings', [CourseController::class, 'add_course_ratings']);
        Route::post('/updateCourseRatings', [CourseController::class, 'update_course_ratings']);

        // ############################### Our Products #############################
        Route::post('addProducts', [ProductController::class, 'add_products']);
        Route::post('myCard', [ProductController::class, 'card_items']);
        Route::post('cardUpdate', [ProductController::class, 'card_update']);
        Route::post('deleteCard', [ProductController::class, 'deleteCard']);

        // ############################# WishList Products ###########################
        Route::post('addWishList', [WishListController::class, 'add_withlist']);
        Route::post('getWishlist', [WishListController::class, 'get_wishlist']);
        Route::post('deleteWishlit', [WishListController::class, 'delete_wishlit']);

        // ############################# Orders Products ###########################
        Route::post('addOrder', [OrderController::class, 'add_order']);
    });

    // ######################### End Verify Authenticate Token  #####################
});
