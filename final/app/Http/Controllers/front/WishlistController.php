<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\WishItem;
use App\Models\AdminProducts;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function index($id = null)
    {
        if (auth()->user()) {
            $user_id = auth()->user()->id;
            $wishlist = WishItem::where('user_id', $user_id)->get();
     
            $products = [];
    
            if ($id !== null) {
                if ($wishlist && $wishlist->count() > 0) {
                        $addedProduct = $wishlist->where('product_id', $id)->first();
                        if (!$addedProduct) {
                            $data = [
                                'product_id' => $id,
                                'user_id' => auth()->user()->id,
                            ];
        
                            $created = WishItem::create($data);
        
                            if (!$created) {
                                // return redirect()->route('client.wishlist')->with('error', 'Failed to add product to wishlist');
                                return redirect()->back()->with('error', 'Failed to add product to wishlist');
                            }
        
                            $wishlist->add($created);
                        } else {
                            return redirect()->back()->with('error', 'Product is already in wishlist');
                        }
                        
                        foreach ($wishlist as $key => $wishitem) {
                            $products[] = AdminProducts::findOrFail($wishitem->product_id);
                        }
                    } else{
                        $data = [
                            'product_id' => $id,
                            'user_id' => $user_id,
                        ];
                        
                        $created = WishItem::create($data);
                        
                        if (!$created) {
                            return redirect()->back()->with('error', 'Failed to add product to wishlist');
                        }else{
                            $products[] = AdminProducts::findOrFail($created->product_id);
                        }
                    }
            }else{
                if ($wishlist && $wishlist->count() > 0) {
                    foreach ($wishlist as $key => $wishitem) {
                        $products[] = AdminProducts::findOrFail($wishitem->product_id);
                    }
                }
            }
    
            return view('front.wishlist', compact('products'));
        } else {
            return redirect()->route('auth.signin');
        }
    }
    
    public function remove($id)
    {
        $wishitem = WishItem::where('product_id', $id)->where('user_id', auth()->user()->id)->first();

        if ($wishitem) {
            $deleted = $wishitem->delete();

            if ($deleted) {
                return redirect()->route('client.wishlist')->with('success', 'Product removed from wishitem successfully');
            }
        }


        return redirect()->back()->with('error', 'Failed to remove product from wishlist');
    }
}
