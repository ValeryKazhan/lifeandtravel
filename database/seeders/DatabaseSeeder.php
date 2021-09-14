<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();
        $category3 = Category::factory()->create();

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $admin= User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => 'admin'
        ]);

        Post::factory(10)->create(['user_id' => $user1->id, 'category_id'=>$category1->id]);
        Post::factory(11)->create(['user_id' => $user1->id, 'category_id'=>$category2->id]);
        Post::factory(12)->create(['user_id' => $user1->id, 'category_id'=>$category3->id]);

        Post::factory(13)->create(['user_id' => $user2->id, 'category_id'=>$category1->id]);
        Post::factory(14)->create(['user_id' => $user2->id, 'category_id'=>$category2->id]);
        Post::factory(15)->create(['user_id' => $user2->id, 'category_id'=>$category3->id]);

        Post::factory(5)->create();

        foreach(Post::all() as $post){

            for($i=1; $i<4; $i++){
                Comment::factory()->create([
                    'user_id' => $i,
                    'post_id' => $post->id]);
            }

        }



    }


}
