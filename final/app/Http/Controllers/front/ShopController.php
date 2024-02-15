<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdminProducts;
use App\Models\Category;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public function index(Request $request, $slug = null )
    {
        $products = AdminProducts::query();
        if (trim($slug)) {
            $category = Category::where('slug->' . LaravelLocalization::getCurrentLocale(), $slug)->where('status', 1)->first();
            if ($category) {
                $products = $products->where('category_id', $category->id)->with('images');
            }
        } else {
            $products = $products->with('images');
        }

        $products = $products->paginate(8);

        $sort = $request->input('sort', 'default');

        $orderBy = 'created_at';
        $orderDirection = 'desc';

        if ($sort == 'name-asc') {
            $orderBy = 'title';
            $orderDirection = 'asc';
        } elseif ($sort == 'name-desc') {
            $orderBy = 'title';
            $orderDirection = 'desc';
        }elseif ($sort == 'price-asc') {
            $orderBy = \DB::raw('price - (price * percent / 100)');
            $orderDirection = 'asc';
        } elseif ($sort == 'price-desc') {
            $orderBy = \DB::raw('price - (price * percent / 100)');
            $orderDirection = 'desc';
        }

        $products = AdminProducts::orderBy($orderBy, $orderDirection)->get();

        return view('front.shop', compact('products'));
    }
}
    