<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Services\ThirdPartService;

class PostController extends Controller
{
    
    private PostService $postService;
    private ThirdPartService $thirdPartService;

    public function __construct(PostService $postService, ThirdPartService $thirdPartService)
    {
        $this->postService = $postService;
        // $this->thirdPartService = new ThirdPartService(env('THIRD_SERVICE_KEY'));
        $this->thirdPartService = $thirdPartService;
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->category)
        {
            $posts = $this->postService->getAllPostsByCategoryID($request->category);
        }
        else 
        {
            $posts = $this->postService->getAllPosts();
        }




        return response()->json($posts, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
