<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\register\CustomRequest;
use App\Http\Controllers\Controller;
use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\DataService;
use Illuminate\Routing\Route;
use App\Http\Requests\categories\CategoriesRequest;



class CategoriesController extends Controller
{

    // private CategoryRepositoryInterface $categoryRepository;
    // public function __construct(CategoryRepositoryInterface $categoryRepository) 
    // {
    //     $this->categoryRepository = $categoryRepository;
    // }

   public function __construct( private DataService $data){}

   
 public function index()
    { 
        try {
            $categories = Category::all();

            if ($categories->isEmpty()) {
                // Handle the case where no categories are found with category_id = 0
                return redirect()->back()->with('error', 'No categories found with category_id = 0');
            }

        //   $categories = $this->categoryRepository->getAllCategories;
        //     dd($categories);
            return view('admin.categories.index', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
 
    
    public function create()
    {
        $categories = Category::where('category_id', 0)->get();
        
        return view('admin.categories.create', compact('categories'));

    }


    public function store(CategoriesRequest $request)   // custom requeste kecsen Requestin qarsisina Custom yaz
    {
        // $request->validate([
        //     'status' => 'required|array',
        //     'slug' => 'required|array',
        //     'image' => 'required|max:2048'
        // ]);
        // $data = [];
        // $categoryModel = new Category;
        $data = ($request->all());
        $data['status'] = (bool)$request->status;
        $data['slug'] = $this->data->sluggableArray($data, 'title');
        $created = Category::create($data);
        // $created = $this->categoryRepository->createCategory($data);
        // dd($created);
       // $created = Category::create($data);
        //$categoryModel->save();
       // dd($data);
    //    $created = Category::create($request->all());
      
       if($created) {
            return redirect()->route('store.categories.index');
          
        } else {
            dd('error');
       }
       dd($data);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $category = Category::findOrFail($id);
       $categories = Category::where('category_id', 0)->get();

        return view('admin.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesRequest $request, string $id)
    {
        $data = $request->all();
        $data['status'] = (bool)$request->status;
        $data['slug'] = $this->data->sluggableArray($data, 'title');
        $category = Category::findOrFail($id);
        $updated = $category->update($data);
        if($updated) {
            return redirect()->route('store.categories.index');
          
        } else {
            dd('error');
       }
    }


    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $deleted = $category->delete();
        if($deleted) {
            return redirect()->route('store.categories.index');
          
        } else {
            dd('error');
       }
    }
}





// public function index()
// {
//     $categories=$this->categoryRepository->getAllCategories();
   
//     return view('admin.categories.index',compact('categories'));
// }