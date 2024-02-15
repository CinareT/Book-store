<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\MainController as MainController;
use App\Models\AdminProducts;
use Validator;
use App\Http\Resources\ProductResource;
   
class ProductController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     *  @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('test', ['only' => ['detail']]);

    }

    public function index()
    {
     
       $products = AdminProducts::all();
    
       return $this->sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 1data:
    public function show(Request $request, $id)
    {
        $language = $request->header('lang');
        app()->setLocale($language);
        $product = AdminProducts::find($id);
  
        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }
   
        return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');

    }

}

