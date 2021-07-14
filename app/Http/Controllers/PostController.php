<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{

    public function search($posts){
        if(request($search = 'search'))
        {
            $posts
                ->where('header', 'like', '%'.request($search).'%')
                ->orWhere('body', 'like', '%'.request($search).'%');
        }
        return $posts;
    }


    public function index(){

        $posts = Post::query();
        $posts = $this->search($posts);

        return view ('index', [
            'posts' => $posts->paginate(Post::POSTS_PER_PAGE),
            'categories' => Category::all(),
            'authors' => User::all()
            ]);
    }

    public function showAuthorPosts(User $author){

        $posts = Post::where('user_id', '=', $author->id);
        $posts = $this->search($posts);

        return view ('index', [
            'posts' => $posts->paginate(Post::POSTS_PER_PAGE),
            'currentAuthor' => $author,
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }

    public function showCategoryPosts(Category $category){

        $posts = Post::where('category_id', '=', $category->id);
        $posts = $this->search($posts);

        return view ('index', [
            'posts' => $posts->paginate(Post::POSTS_PER_PAGE),
            'currentCategory' => $category,
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }


    public function showPost(Post $post){
        return view ('post', [
            'post' => $post,
            'currentCategory' => $post->category,
            'currentAuthor' => $post->author,
            'categories' => Category::all(),
            'authors' => User::all()
            ]);
    }

    //index, show, create, store, edit, update, destroy

}
