<?php

namespace App\Respositories;

use App\Models\Post;

class PostRepository extends BaseRepository
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
}