<?php

namespace App\Http\Controllers;
use App\Http\Middleware\MustBeAdmin;
use App\Models\Category;

use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class PostController extends Controller
{


    private static function matchesAuth($userId){
        if($userId!=auth()->id() and !MustBeAdmin::isAdmin())
            abort(403);
    }

    public function create(){
        return view('post.create-or-edit',[
            'categories' => Category::all()
        ]);
    }



    public function edit(Post $post){
        return view('post.create-or-edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }


    private function getValidatedPostAttributes(): array
    {

        $attributes = request()->validate([
            'header'=>['required', 'max:255'],
            'body'=>['required'],
            'category_id'=>['required', Rule::exists('categories', 'id')],
            'user_id' => ['required', Rule::exists('users', 'id')]
        ]);

        self::matchesAuth($attributes['user_id']);

        $attributes['slug'] = Str::slug($attributes['header']);

        return $attributes;
    }

    public function store(){



        $attributes = $this->getValidatedPostAttributes();



        $post = Post::create($attributes);

        return redirect("/post/$post->slug");

    }

    public function update(Post $post){

        $attributes = $this->getValidatedPostAttributes();
        $post->update($attributes);

        return redirect("/post/".$attributes['slug'])->with('post edited', 'Post "'.$post->header.'" is successfully edited');
    }

    public function destroy(Post $post){

            self::matchesAuth($post->author->id);
            $post->delete();
            session()->flash('post deleted', "Post \"$post->header\" is successfully deleted");

        return redirect('/authors/'.auth()->user()->username);
    }

    public function index(){
        $posts = Post::query();
        $posts = $this->search($posts);

        return view ('index', [
            'posts' => $posts->paginate(9),
            'categories' => Category::all(),
            'authors' => User::all()
            ]);
    }

    public function showAuthorPosts(User $author){
        $posts = Post::where('user_id', '=', $author->id);
        $posts = $this->search($posts);
        return view ('author', [
            'posts' => $posts->paginate(Post::POSTS_PER_PAGE),
            'currentAuthor' => $author,
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }

    public function showCategoryPosts(Category $category){

        $posts = Post::where('category_id', '=', $category->id);
        $posts = $this->search($posts);
        return view ('category', [
            'posts' => $posts->paginate(11),
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


    private function search($posts){

        if(request($search = 'search'))
        {
            $posts
                ->where('header', 'like', '%'.request($search).'%')
                ->orWhere('body', 'like', '%'.request($search).'%');
        }
        return $posts;
    }

    public function adminPosts(){
        return view ('admin.posts', [
            'posts' => Post::all()
        ]);
    }

    public function adminAuthorPosts(User $author){
        return view ('admin.posts', [
           'posts' => $author->posts
        ]);
    }



    public function adminEdit(Post $post){

        return view('post.create-or-edit', [
            'post' => $post,
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }



}
