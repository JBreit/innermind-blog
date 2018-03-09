<?php

namespace Innermind\Post\Apis;

use Illuminate\Http\Request;
use Innermind\Post\Services\PostService;
use Innermind\Support\Http\Controller;
use Innermind\Post\Entities\Post;

class PostApi extends Controller
{
    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    protected function index()
    {
        $posts = $this->service->getLatestPosts();

        return view('posts.index', compact('posts'));
    }

    protected function create()
    {
        return view('posts.create');
    }

    protected function store(Request $request)
    {
        //
    }

    protected function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    protected function edit(Post $post)
    {
        //
    }

    protected function update(Request $request, Post $post)
    {
        //
    }

    protected function destroy(Request $request, Post $post)
    {
        //
    }
}