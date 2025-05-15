<?php

namespace App\Http\Controllers;

use App\Events\NewCategoryCreatedEvent;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::select('id', 'name', 'slug', 'created_at', 'updated_at')->get();
        return response()->json( new CategoryCollection($categories) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $storeCategoryRequest)
    {        
        $newCategory = Category::create([
            'name' => $storeCategoryRequest->name,
        ]);

        // .... 

        // ..... 
        
        $user = User::find(1)->first();

        NewCategoryCreatedEvent::dispatch($newCategory, $user);

        return response()->json($newCategory, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json( new CategoryResource($category));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $updateCategoryRequest, Category $category)
    {
        $category->name = $updateCategoryRequest->name;
        $category->save();
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null, 204);
    }




    public function posts(Category $category)
    {
        $category->load('posts');
        return response()->json($category);
    }
}
