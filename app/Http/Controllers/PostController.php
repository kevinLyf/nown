<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View {
        return view('welcome');
    }

    public function create(): View {
        return view('posts.create');
    }
}
