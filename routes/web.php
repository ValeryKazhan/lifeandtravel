<?php

use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can user web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'showPost']);
Route::post('/post/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');
Route::get('/post/delete/{post}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/post/edit/{post}', [PostController::class, 'edit'])->middleware('auth');
Route::post('/post/update/{post:id}', [PostController::class, 'update'])->middleware('auth');

Route::get('/post', [PostController::class, 'create'])->middleware('auth');
Route::post('/post/create', [PostController::class, 'store'])->middleware('auth');

Route::get('/categories/{category:slug}', [PostController::class, 'showCategoryPosts']);
Route::get('/authors/{author:username}', [PostController::class, 'showAuthorPosts']);


Route::get('/register/create', [UserController::class, 'create'])->middleware('guest');
Route::post('/register/create', [UserController::class, 'store'])->middleware('guest');

Route::get('/sessions/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/sessions/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/admin/menu', function (){
    return view('admin.menu');
})->middleware('admin');

Route::get('/admin/user{author}/posts', [PostController::class, 'adminAuthorPosts'])->middleware('admin');
Route::get('/admin/posts', [PostController::class, 'adminPosts'])->middleware('admin');
Route::get('/admin/users', [UserController::class, 'adminUsers'])->middleware('admin');
Route::get('/admin/post/edit/{post}', [PostController::class, 'adminEdit'])->middleware('admin');
Route::get('/admin/user/edit/{user}', [UserController::class, 'adminEdit'])->middleware('admin');
Route::post('/admin/user/update/{user}', [UserController::class, 'update'])->middleware('admin');
Route::get('/admin/user/delete/{user}', [UserController::class, 'destroy'])->middleware('admin');

Route::get('/blogpost', function(){
    return view('blog-post');
});

