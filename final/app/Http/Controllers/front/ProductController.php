<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Images;
use App\Models\AdminProducts;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = AdminProducts::where('id',$id)->first();

        $newArrivals = AdminProducts::latest()->take(6)->get();

        $category = Category::where('id',$product->category_id)->first();

        $images = [];

        if($product){
           $images[]= $product->main_image;
        }

        $imgs = Images::where('product_id', $product->id)->pluck('img')->toArray();
        if ($imgs) {
            $images = array_merge($images, $imgs);
        }


       $products = AdminProducts::orderBy('created_at', 'desc')->take(6)->get();

       $categories = Category::all();
        return view('front.product', compact('product', 'category', 'images', 'products', 'categories', 'newArrivals'));
        
}
}