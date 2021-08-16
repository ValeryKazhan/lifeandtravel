<?php

namespace App\Http\Controllers;
use App\Http\Middleware\MustBeAdmin;
use App\Models\Category;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class PostController extends Controller
{


    private static function matchesAuth($userId){
        if($userId!=auth()->id() and !MustBeAdmin::isAdmin())///как в даннном случае пользоваться middleware правильно?
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

        DB::table('posts')->where('id','=', $post->id)->update($attributes);

        return redirect("/post/".$attributes['slug'])->with('post edited', 'Post "'.$post->header.'" is successfully edited');
//        $post->slug = $attributes['slug'];
//        $post->header = $attributes['header'];
//        $post->body = $attributes['body'];
//        $post->save();
    }

    public function destroy(Post $post){

            self::matchesAuth($post->author->id);

            DB::table('posts')->where('id', '=', $post->id)->delete();
            session()->flash('post deleted', "Post \"$post->header\" is successfully deleted");

        return redirect('/authors/'.auth()->user()->username);
    }

    public function index(){

        //$posts = Post::query();
        $posts = $this->search(Post::query());

        return view ('index', [
            'posts' => $posts->paginate(13),
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

        //dd($posts);

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

    public function adminPosts(User $author){


            if($author->id)
                $posts = $author->posts;
            else
                $posts = Post::all();

        return view ('admin.posts', [
            'posts' => $posts
        ]);
    }



    public function adminEdit(Post $post){

        return view('post.create-or-edit', [
            'post' => $post,
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }


    //index, show, create, store, edit, update, destroy

}
