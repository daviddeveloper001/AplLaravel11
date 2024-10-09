<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;
use App\Models\Post;
use App\Services\PostServices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function __construct(private PostServices $postServices){}
    public function index()
    {
        return PostResource::collection($this->postServices->getAllPost(5));
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
        $post = $this->postServices->getPostById($post);
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post) : JsonResponse
    {
        $this->postServices->deletePost($post);

        return new JsonResponse(['message' => 'Post deleted successfully'], Response::HTTP_OK);
    }
}
