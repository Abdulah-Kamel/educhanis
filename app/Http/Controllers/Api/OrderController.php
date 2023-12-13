<?php

namespace App\Http\Controllers\Api;

use App\CartItem;
use App\Http\Controllers\Controller;
use App\Http\Resources\OurPoductsResource;
use App\Order;
use App\OrderItem;
use App\Product;
use App\Trait\GeneralTrait;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class OrderController extends Controller
{
    use GeneralTrait;
    public function add_order(Request $request)
    {
        $order = Wishlist::where('product_id', $request->id)->first();
        try {
            $total_price = auth()->user()->items->sum('final_price');
            $cart_items = auth()->user()->items;


            if ($order) {

                $order = Order::create(array_merge([
                    'user_id' => request()->user()->id,
                    'total_price' => $total_price,
                    'status' => $request->status
                ], $request->all()));

                foreach ($cart_items as $item) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $item->product_id,
                        'product_price' => $item->product->price,
                        'product_qty' => $item->qty,
                        'product_total' => $item->final_price
                    ]);
                    $this->uploadProductQty($item->product_id, $item->qty);
                }
                CartItem::where('user_id', auth()->id())->delete();

                return $this->returnData(null, 'successfully', 201);
            }
            return $this->returnData(null, 'Not Found The Order In WishList', 401);
        } catch (\Exception $ex) {
            return $this->returnData(null, 'Exception', 400);
        }
    }
}
