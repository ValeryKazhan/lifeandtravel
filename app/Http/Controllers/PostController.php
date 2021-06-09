<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    public function index(){
        return view ('blog.index');
    }

    public function blogList(){
        return view ('blog.blogListLayout', ['posts' => Post::all()]);
    }

    public function showPost(Post $post){
        return view ("blog.post", ['post' => $post]);
    }

}
