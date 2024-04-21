<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Comment;
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
        $search = request('search');

        if ($search) {
            $posts = Post::where([
                ['title', 'like', '%' . $search . '%']
            ])->orderBy('created_at', 'desc')->get();
        } else {
            $posts = Post::orderBy('created_at', 'desc')->get();
        }

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
    public function show($id): View|RedirectResponse
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->orderBy('created_at', 'asc')->get();

        return view('posts.show', ['post' => $post, 'comments' => $comments]);
    }

    /**
     * Create a new post.
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;

        $user = auth()->user();
        $post->owner_id = $user->id;

        $post->save();

        return redirect('/', '201')->with('success', 'You created a new post!');
    }
}
