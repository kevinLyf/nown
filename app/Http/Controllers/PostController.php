<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Show home page.
     */
    public function index(): View
    {
        $posts = Post::all();

        return view('welcome', ['posts' => $posts]);
    }

    /**
     * Show the form to create a new post.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Show a post by id.
     */
    public function show($id): View | RedirectResponse
    {
        $post = Post::findOrFail($id);

        if(isset($post)){
            return redirect('/', '403');
        }

        return view('posts.create', ['post' => $post]);
    }

    /**
     * Create a new post.
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect('/', '201')->with('success', 'You created a new post!');
    }
}
