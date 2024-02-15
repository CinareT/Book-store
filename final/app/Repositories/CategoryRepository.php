<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface 
{
    public function getAllCategories() 
    {
        return Category::all();
    }

    public function getCategoryById($categoryId) 
    {
        return Category::findOrFail($categoryId);
    }

    public function deleteCategory($categoryId) 
    {
        Category::destroy($categoryId);
    }

    public function createCategory( $categoryId) 
    {
        return Category::create($categoryId);
    }

    public function updateCategory($categoryId, array $newDetails) 
    {
        return Category::whereId($categoryId)->update($newDetails);
    }

    
}
