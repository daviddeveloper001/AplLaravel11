<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request): View
    {
        $posts = Post::latest()->paginate();

        return view('post.index', compact('posts'));
    }

    public function store(PostStoreRequest $request): RedirectResponse
    {
        $post = Post::create($request->validated());

        return redirect()->route('post.index');
    }

    public function show(Request $request, Post $post): View
    {
        $user = User::find($post);

        return view('post.show', compact('post'));
    }
}
