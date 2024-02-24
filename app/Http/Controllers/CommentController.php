<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store($id, StoreCommentRequest $request): RedirectResponse
    {
        $comment = new Comment;
        $comment->message = $request->message;

        $user = auth()->user();
        $comment->user_id = $user->id;
        $comment->post_id = $id;


        $comment->save();

        return redirect('/posts/' . $id, '201')->with('success', 'You commented with success!');
    }
}
