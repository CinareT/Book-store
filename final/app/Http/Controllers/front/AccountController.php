<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderProduct;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $cartItems = Cart::content();
        $total = Cart::total();
        $data['user_id'] = auth()->user()->id;
        $data['total_amount'] = $total;

        $orders = Order::all(); 
        return view('front.account', compact('orders', 'cartItems'));
    }
    
}
