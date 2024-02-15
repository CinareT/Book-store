<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\MainController as MainController;
use App\Models\Category;
use App\Interfaces\CategoryRepositoryInterface;

use Validator;
use App\Http\Resources\CategoryResource;
   
class CategoryController extends MainController
{

    // public function __construct(CategoryRepositoryInterface $categoryRepository) 
    // {
    //     $this->categoryRepository = $categoryRepository;
    // }
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
     
        $categories = Category::all();
       return $this->sendResponse(CategoryResource::collection($categories), 'Products retrieved successfully.');
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
        $category = Category::find($id);
  
        if (is_null($category)) {
            return $this->sendError('Product not found.');
        }
   
        return $this->sendResponse(new CategoryResource($category), 'Product retrieved successfully.');

    }

}