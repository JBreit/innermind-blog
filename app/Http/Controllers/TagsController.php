<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts;

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function list()
    {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|max:255'
        ]);

        session()->flash('message', 'New Tag was successfully created.');

        return redirect()->route('tags.list');
    }
}
