<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsRequest;
use App\Models\Brands;
use App\Services\DataService;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function __construct(private DataService $data)
    {
    }
    

    public function index()
    {
        $brands = Brands::paginate(10);

        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brands::where('brand_id', 0)->get();
        return view('admin.brands.create', compact('brands'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = (bool)$request->status;
        $data['slug'] = $this->data->sluggableArray($data, 'title');
        $created = Brands::create($data);

        if ($created) {
            return redirect()->route('store.brands.index');
        } else {
            dd('error');
        }
    }

   
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $brand = Brands::findOrFail($id);
        $brands = Brands::where('brand_id', 0)->get();
        return view('admin.brands.edit', compact('brand', 'brands'));
    }


    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['status'] = (bool)$request->status;
        $data['slug'] = $this->data->sluggableArray($data, 'title');
        $brand = Brands::findOrFail($id);
        $updated = $brand->update($data);
        if ($updated) {
            return redirect()->route('store.brands.index');
        } else {
            dd('error');
        }
    }

    
    public function destroy(string $id)
    {
        $brand = Brands::findOrFail($id);
        $deleted = $brand->delete();
        if ($deleted) {
            return redirect()->route('store.brands.index');
        } else {
            dd('error');
        }
    }
}