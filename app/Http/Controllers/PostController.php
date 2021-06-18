<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    public function index(Request $request){
        $posts = Post::query();
        if ($category = $request->get('cat')){
            $posts->where('category_id', '=', $category);
        }
        if ($user = $request->get('user')){
            $posts->where('user_id', '=', $user);
        }
        return view ('blog.index', ['posts' => $posts->get()]);
        //return view ('blog.index');
    }

    private function showPostsList($posts){
        return view ('blog.postsList', ['posts' => $posts, 'requestString' => new RequestString()]);
    }

    public function blogList(Request $request){
       $posts = Post::query();
       if ($category = $request->get('cat')){
            $posts->where('category_id', '=', $category);
       }
       if ($user = $request->get('user')){
            $posts->where('user_id', '=', $user);
       }
        return $this->showPostsList($posts->get());
    }

    public function showCategory(Category $category){
        return $this->showPostsList($category->posts);
    }

    public function showPost(Post $post){
        return view ("blog.post", ['post' => $post]);
    }



}
