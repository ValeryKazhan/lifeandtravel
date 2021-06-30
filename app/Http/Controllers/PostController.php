<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    private function getPosts(Request $request){
        $posts = Post::query();
        if ($category = $request->get('cat')){
            $posts->where('category_id', '=', $category);
        }
        if ($user = $request->get('user')){
            $posts->where('user_id', '=', $user);
        }

        if(request($search = 'search')){
            $posts
                ->where('header', 'like', $searchString = '%'.request($search).'%')
                ->orWhere('body', 'like', $searchString);
        }

        return $posts->get();
    }

    public function index(Request $request){

        return view ('blog.index', [
            'posts' => $this->getPosts($request)
            ]);
        //return view ('blog.index');
    }

    private function showPostsList($posts, string $view = 'blog.postsList'){
        return view ($view, ['posts' => $posts, 'requestString' => new RequestString()]);
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
