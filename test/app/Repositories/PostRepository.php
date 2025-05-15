<?php

namespace App\Repositories;
use App\Models\Post;

class PostRepository
{

    public function findAll()
    {
        return Post::with('category')->get();
    }

    public function findByCategoryID(int $category_id)
    {
        return Post::with('category')->where('category_id', $category_id)->get();
    }

}