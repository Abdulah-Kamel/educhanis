<?php

namespace App\Http\Controllers\Api;

use App\CartItem;
use App\Http\Controllers\Controller;
use App\Http\Resources\CardItemsResource;
use App\Http\Resources\OurPoductsResource;
use App\Product;
use App\Trait\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductController extends Controller
{
    use GeneralTrait;

    public function get_products()
    {
        $products = OurPoductsResource::collection(Product::all());
        return $this->returnData($products, 'successfully return our products', 200);
    }

    public function add_products(Request $request)
    {
        JWTAuth::authenticate($request->token);
        $validator = Validator::make($request->all(), [
            'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->returnData('Error', $validator->errors()->toJson(), 401);
        }

        $add_product = CartItem::insert([
            'user_id' => request()->user()->id,
            'product_id' => $request->id,
            'qty' => $request->qty,
        ]);



        return $this->returnData($add_product, 'successfully', 201);
    }

    public function card_items(Request $request)
    {
        try {

            JWTAuth::authenticate($request->token);
            $id_user = CartItem::where('user_id', request()->user()->id)->get();
            $card_items = CardItemsResource::collection($id_user);

            return $this->returnData($card_items, 'successfully', 200);
        } catch (\Exception $ex) {
            return $this->returnData(null, 'Exception card item', 400);
        }
    }

    public function card_update(Request $request)
    {
        $token = JWTAuth::authenticate($request->token);
        $validator = Validator::make($request->all(), [
            'qty' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->returnData(null, $validator->errors()->toJson(), 400);
        }

        $product_id = CartItem::where('id', $request->id);
        if ($product_id) {
            $product_id->update([
                'qty' => $request->qty
            ]);

            return $this->returnData(true, "The data has been modified successfully", 200);
        }
        return $this->returnData(false, "The data has been not modified successfully", 200);
    }

    public function deleteCard(Request $request)
    {
        $product = CartItem::find($request->id);
        if ($product) {
            $product->delete();
            return $this->returnData(null, 'successfully', 200);
        }
        return $this->returnData($product, 'Not Found Our Product', 401);
    }
}
