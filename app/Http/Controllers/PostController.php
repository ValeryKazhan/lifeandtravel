<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    public function index(){
        return view ('blog.index');
    }

    private function showPostsList($posts){
        return view ('blog.postsList', ['posts' => $posts]);
    }

    public function blogList(){
        return $this->showPostsList(Post::all());
    }

    public function showCategory(Category $category){
        return $this->showPostsList($category->posts);
    }

    public function showPost(Post $post){
        return view ("blog.post", ['post' => $post]);
    }



}
