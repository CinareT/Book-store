<?php

namespace App\Http\Controllers\front; 

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\AdminProducts;
use App\Http\Controllers\front\CartController;

class ShoppingCartController extends Controller
{
    public function add($id)
    {
        $product = AdminProducts::find($id);

        if ($product) {
            $discountedPrice = $product->price - ($product->price * ($product->percent / 100));

            Cart::add([
                'id' => $product->id,
                'name' => $product->title,
                'qty' => 1,
                'price' => $discountedPrice,
                'weight' => 550,
                'options' => [
                    'image' => asset($product->main_image($product->images)),
                    ''
                    
                ]
            ]);
        }

        return redirect()->back();
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect()->back();
    }

    public function remove($rowId)
    {
        if ($rowId) {
            Cart::remove($rowId);
            return redirect()->back();
        }
    }
    public function increase($rowId)
    {
        app(CartController::class)->increase($rowId);

        return redirect()->back();
    }
}
