<?php

namespace Innermind\Post\Services;

use Innermind\Post\Entities\Post;

class PostService
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getLatestPosts()
    {
        return $this->post->latest()->filter(request(['month', 'year']))->get();
    }
}