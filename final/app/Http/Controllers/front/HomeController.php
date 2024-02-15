<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdminProducts;
use App\Models\Images;
use App\Models\Category;
use Closure;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $newArrivals = AdminProducts::latest()->take(6)->get();

        $bestSellers = AdminProducts::select('admin_products.*', DB::raw('SUM(order_products.qty) as toplam_satis'))
            ->join('order_products', 'admin_products.id', '=', 'order_products.product_id')
            ->groupBy('admin_products.id')
            ->orderByDesc('toplam_satis')
            ->take(5)
            ->get();

        $products = AdminProducts::all();
        $images = Images::all();

        $categories = Category::with('category')->where('status', 1)->get();

        return view('front.home', compact('bestSellers', 'products', 'images', 'categories', 'newArrivals'));
    }
    public function render()
    {

        $categories = Category::with('category')->where('status', 1)->get();
        return view('components.front-header-component', compact('categories'));
    }
}

