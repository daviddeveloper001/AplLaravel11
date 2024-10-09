@extends('layouts.app')
@section('title', 'post.index')

@section('content')
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-3 my-10">
            @foreach ($posts as $post)
                <div class="bg-white hover:bg-blue-100 border-gray-200 p-5">
                    <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                    <p class="text-xs">{{ $post->excerpt}}</p>
                    <p class="text-xs text-right">{{ $post->published }}</p>
                </div>
            @endforeach
            <div class="mb-10">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
