<?php

namespace App\Services;

use App\Models\Post;
use App\Respositories\PostRepository;

class PostServices
{
    public function __construct(private PostRepository $postRepository){}

    public function getAllPost(int $page = 10)
    {
        return $this->postRepository->all($page);
    }

    public function getPostById(Post $post)
    {
        return $this->postRepository->getById($post);
    }

    public function deletePost(Post $post)
    {
        return $this->postRepository->deleteModel($post);
    }
}