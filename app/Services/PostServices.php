<?php

namespace App\Services;

use App\Respositories\PostRepository;

class PostServices
{
    public function __construct(private PostRepository $postRepository){}

    public function getAllPost(int $page = 10)
    {
        return $this->postRepository->all($page);
    }
}