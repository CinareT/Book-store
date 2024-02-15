<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminProducts;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function index(){
        $products = AdminProducts::all();
        
        
        return view('front.cart',compact('products'));
    }

    public function increase($rowId)
    {
        $item = Cart::get($rowId);

        if ($item) {
            Cart::update($rowId, $item->qty + 1); 
        }

        return redirect()->back();
    }

}
