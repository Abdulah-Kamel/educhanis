<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WishListResource;
use App\Trait\GeneralTrait;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishListController extends Controller
{
    use GeneralTrait;

    public function add_withlist(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->returnData('Error', $validator->errors(), 400);
        }


        $wishlist = Wishlist::insert([
            'user_id' => request()->user()->id,
            'product_id' => $request->id,
            'created_at' => date('Y-m-d')
        ]);
        if ($wishlist) {
            return $this->returnData(null, 'successfully', 201);
        }
        return $this->returnData('Error', 'Not Found Product', 201);
    }

    public function get_wishlist(Request $request)
    {
        try {
            $user_id = Wishlist::Where('user_id', request()->user()->id)->get();
            $wishlist_products = WishListResource::collection($user_id);
            return $this->returnData($wishlist_products, 'successfully', 200);
        } catch (\Exception $ex) {
            return $this->returnData('Error', 'Exception WishList', 400);
        }
    }

    public function delete_wishlit(Request $request)
    {
        $product = Wishlist::find($request->id);
        if ($product) {
            $product->delete();
            return $this->returnData(null, 'successfully', 200);
        }
        return $this->returnData($product, 'Not Found Our Product Wishlit', 401);
    }
}
