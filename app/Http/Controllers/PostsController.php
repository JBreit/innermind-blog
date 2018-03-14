<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Posts;
use App\Post;
use App\Tag;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        // dd($posts);
        // $posts = $posts->all();

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all('name', 'id');

        return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->createPost($request);

        session()->flash('message', 'Your post has been published.');

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Post $post)
    {
        $tags = $post->tags()->pluck('name', 'id')->all();

        return view('posts.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $post->update($request->all());

        $this->syncTags($post, $request->input('tag_list'));

        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        //
    }

    public function tags(Post $post)
    {
        $tags = $post->tags;
    }

    /**
     * Sync tag list in the database
     *
     * @param  Post   $post
     * @param  array  $tags
     */
    private function syncTags(Post $post, array $tags)
    {
        $post->tags()->sync($tags);
    }

    /**
     * Helper method to create post through abstraction
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Object $post
     */
    private function createPost(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = auth()->user()->publish(new Post(request(['title', 'body'])));

        $this->syncTags($post, $request->input('tag_list'));

        return $post;
    }
}
