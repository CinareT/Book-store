<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AdminProducts;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('search.index');
    }

     public function search(Request $request)
    {
        $query = $request->input('query');

        $products = AdminProducts::where('title', 'like', '%' . $query . '%')
            ->get();

        return view('front.search', compact('products'));
}
}