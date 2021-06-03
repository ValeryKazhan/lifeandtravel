<?php

use Illuminate\Support\Facades\Route;

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

$heading1 = 'First blog page';
$paragraph1 = 'Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.';

//$post2 = new Post();
$heading2 = 'Second blog page';
$paragraph2 = 'Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.';


$heading3 = 'Third blog page';
$paragraph3 = 'Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.';

$posts = [1 => [$heading1 , $paragraph1],
        2 => [$heading2 , $paragraph2],
        3 => [$heading3, $paragraph3]];


Route::get('/', [BlogController::class, 'index']);

//Route::get('/blog', [BlogController::class, 'blogList']);

Route::get('/blog',function() use ($posts) {
    return view ('blog.blogListLayout',  ['posts' => $posts]);
});

Route::get('/blog/{number}', function($number) use ($posts) {
        return view ('blog.post',  $test = ['posts' => $posts, 'number' => $number]);
});


