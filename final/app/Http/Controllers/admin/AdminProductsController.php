<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Images;
use App\Models\AdminProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminProductsController extends Controller
{
    public function index()
    {
        $products = AdminProducts::with('images')->get();
        return view('admin.products.index', compact('products'));
    }



    public function create()
    {
        $categories = Category::all();
        $brands = Brands::all();

        return view('admin.products.create', compact('categories', 'brands'));
    }
    public function store(Request $request)
    {
        $created = AdminProducts::create($request->all());
        $extension = $request->main_image->getClientOriginalExtension();
        $randomName = Str::random(10);
        $lastPath = 'storage/products/' . $randomName . "." . $extension;
        $request->main_image->storeAs('products', $randomName . "." . $extension, 'public');
        $updated = $created->update(['main_image' => $lastPath]);
        if ($updated) {
            return redirect()->route('store.products.index');
        }
    }
    public function products_add_image($id)
    {
        return view('admin.product_images.create', compact('id'));
    }

    public function products_store_image(Request $request, $id)
    {
        $created = Images::create(['product_id' => $id]);
        $extension = $request->img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $lastPath = 'storage/products_images/' . $randomName . "." . $extension;
        $request->img->storeAs('products_images', $randomName . "." . $extension, 'public');
        $updated = $created->update(['img'  => $lastPath]);
        if ($updated) {
            return redirect()->route('store.products.index');
        }
    }
    public function product_images($id)
    {
        $images = Images::where('product_id', $id)->get();
        return view('admin.product_images.index', compact('images', 'id'));
    }

    public function add_main_image($id, $product_id)
    {
        $findedImages = Images::where('product_id', $product_id);
        $updated = $findedImages->update(['is_main' => 0]);
        if ($updated) {
            $image = Images::findOrFail($id);
            $reupdated = $image->update(['is_main' => 1]);
            if ($reupdated) {
                return redirect()->back();
            }
        }
    }

    public function destroy($id)
    {
        $product = AdminProducts::findOrFail($id);
        $product->delete();

        return redirect()->route('store.products.index');
    }


    public function edit($id)
    {
        $product = AdminProducts::findOrFail($id);
        $categories = Category::all();
        $brands = Brands::all();

        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    public function update(Request $request, $id)
    {
       

        $product = AdminProducts::findOrFail($id);

        $product->update($request->except('main_image'));

        if ($request->hasFile('main_image')) {
            $extension = $request->main_image->getClientOriginalExtension();
            $randomName = Str::random(10);
            $lastPath = 'storage/products/' . $randomName . "." . $extension;
            $request->main_image->storeAs('products', $randomName . "." . $extension, 'public');
            $product->update(['main_image' => $lastPath]);
        }

        return redirect()->route('store.products.index')->with('success', 'Product updated successfully');
 }



}