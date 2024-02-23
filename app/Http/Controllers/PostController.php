<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Nette\Schema\ValidationException;

class PostController extends Controller
{
    /**
     * Show home page.
     */
    public function index(): View
    {
        return view('welcome');
    }

    /**
     * Show the form to create a new post.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Create a new post.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect('/', '201')->with('success', 'You created a new post!');
    }
}
