<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', [PagesController::class, 'index']);

Route::get('/services', [PagesController::class, 'services']);

Route::get('/about', function () {
    return view ('pages.about');
});

Route::get('/users/{id}', function ($id) {
    return 'this is er '.$id;
});
*/

Route::get('/', [BlogController::class, 'index']);

Route::get('/blog', [BlogController::class, 'blogList']);

Route::get('/blog/pages/{number}', function($number){
    return view ("blog.pages.$number");
});

/*Route::get('/', [PagesController::class, 'index']);
Route::resource('/blog', PostsController::class);
Auth::routes();*/