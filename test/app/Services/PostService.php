<?php

namespace App\Services;
use App\Repositories\PostRepository;

class PostService
{

    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->findAll();
    }

    public function getAllPostsByCategoryID(int $category_id)
    {
        return $this->postRepository->findByCategoryID($category_id);
    }

}