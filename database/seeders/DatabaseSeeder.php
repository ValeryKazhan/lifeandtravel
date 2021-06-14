<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user1= self::createRandomUser();
        $user2 = self::createRandomUser();

        $sportCategory = self::createCategory('sport', 'Sport');
        $newsCategory = self::createCategory('news', 'News');
        $actionCategory = self::createCategory('action', 'Action');

        self::createPost($user1, $sportCategory,'Sport post one', 'sport_post_one', 'Sport post text one');
        self::createPost($user1, $sportCategory,'Sport post two', 'sport_post_two', 'Sport post text two');
        self::createPost($user1,$newsCategory,'News post one', 'news_post_one', 'News post text one');
        self::createPost($user2,$actionCategory,'Action post one', 'action_post_one', 'Action post text one!');

    }

    private static function createPost(User $user, Category $category, string $header, string $slug, string $body):Post
    {

        return Post::create(
            [
                'user_id' => $user->id,
                'category_id' => $category->id,
                'header' => $header,
                'slug' => $slug,
                'body' => $body
            ]
        );
    }

    private static function createCategory(string $slug, string $name): Category
    {
        return Category::create(
            [
                'slug' => $slug,
                'name' => $name
            ]
        );
    }

    private static function createRandomUser():User
    {
        return User::factory()->create();
    }




}
