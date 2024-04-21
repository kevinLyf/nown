<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);

Route::prefix('/posts')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::post('/', [PostController::class, 'store']);
        Route::get('/create', [PostController::class, 'create'])->middleware('auth');
    });
    Route::get('/{id}', [PostController::class, 'show']);
});

Route::post('/comment/{id}', [CommentController::class, 'store'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});
