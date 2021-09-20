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
        $sport = Category::factory()->create(['name' => 'Sport']);
        $travel = Category::factory()->create(['name' => 'Travel']);
        $news = Category::factory()->create(['name' => 'News']);

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $admin= User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => 'admin'
        ]);

        $jack= User::create([
            'username' => 'jackSmith',
            'name' => 'Jack Smith',
            'email' => 'jack@mail.ru',
            'password' => 'password'
        ]);

        $peter = User::create([
            'username' => 'peterpeter',
            'name' => 'Peter Johnson',
            'email' => 'peter@mail.ru',
            'password' => 'password'
        ]);

        $kevin = User::create([
            'username' => 'kevinanderson',
            'name' => 'Kevin Anderson',
            'email' => 'kevin@mail.ru',
            'password' => 'password'
        ]);

        Post::factory()->create([
            'user_id' => $jack->id,
            'category_id'=>$travel->id,
            'images' => ['/img/blogs/1/1.png'],
            'header' => 'THE TRACKS OF THE CALUSA',
            'body' => '„This is the top of the mound. It’s a nice sunny spot.“, says Mike Hammond. It only took us a few minutes to get here. A short trail through a thick forest of mangroves leads from the water to the top of the hill.
            „This is the highest point in Lee County“, says Mike. „30 feet above water.“ All thanks to the countless shells that the Calusa had piled over many generations to form this man-made hill.
            „Supposedly the more important you were the higher up on the mound you’d be.“, says Mike. He is the coordinator of the Calusa Blueway and joins me for my first leg. „Back then you’d be able look out and see your enemies approaching.
            You get a nicer breeze and if there’s a flood you’re up higher.“'
        ]);

        Post::factory()->create([
            'user_id' => $kevin->id,
            'category_id'=>$travel->id,
            'images' => ['/img/blogs/4/1.png'],
            'header' => 'DESTINATION: NICARAGUA',
            'body' => '„This is the top of the mound. It’s a nice sunny spot.“, says Mike Hammond. It only took us a few minutes to get here. A short trail through a thick forest of mangroves leads from the water to the top of the hill.
            „This is the highest point in Lee County“, says Mike. „30 feet above water.“ All thanks to the countless shells that the Calusa had piled over many generations to form this man-made hill.
            „Supposedly the more important you were the higher up on the mound you’d be.“, says Mike. He is the coordinator of the Calusa Blueway and joins me for my first leg. „Back then you’d be able look out and see your enemies approaching.
            You get a nicer breeze and if there’s a flood you’re up higher.“'
        ]);



        Post::factory()->create([
            'user_id' => $jack->id,
            'category_id'=>$sport->id,
            'images' => ['/img/blogs/2/2.png'],
            'header' => 'Cycling as it is',
            'body' => 'Cycling, use of a bicycle for sport, recreation, or transportation.
            The sport of cycling consists of professional and amateur races, which are held mostly
            in continental Europe, the United States, and Asia. The recreational use of the bicycle
            is widespread in Europe and the United States. Use of the bicycle as a mode of transportation
            is particularly important in non-Western nations and in flatter countries, some of which,
            like the Netherlands, have a widespread system of bicycle paths.'
        ]);

        Post::factory()->create([
            'user_id' => $kevin->id,
            'category_id'=>$travel->id,
            'images' => ['/img/blogs/4/1.png'],
            'header' => 'DESTINATION: NICARAGUA',
            'body' => '„This is the top of the mound. It’s a nice sunny spot.“, says Mike Hammond. It only took us a few minutes to get here. A short trail through a thick forest of mangroves leads from the water to the top of the hill.
            „This is the highest point in Lee County“, says Mike. „30 feet above water.“ All thanks to the countless shells that the Calusa had piled over many generations to form this man-made hill.
            „Supposedly the more important you were the higher up on the mound you’d be.“, says Mike. He is the coordinator of the Calusa Blueway and joins me for my first leg. „Back then you’d be able look out and see your enemies approaching.
            You get a nicer breeze and if there’s a flood you’re up higher.“'
        ]);


        Post::factory()->create([
            'user_id' => $jack->id,
            'category_id'=>$travel->id,
            'images' => ['/img/blogs/3/1.png'],
            'header' => 'Visiting the Jurassic Coast',
            'body' => 'Dorset’s Jurassic Coast stretches 95 miles along southern England.
            Its towering white cliffs above crashing seas are an iconic symbol of Great Britain.
            But, while the Dorset coast has some of the finest scenery in the UK, there’s a lot more
            to this UNESCO world heritage site than stunning vistas.
            Here you can explore rock pools in tiny coves or laze on sweeping golden beaches.
            Let the mind wander at atmospheric decaying castles and hunt for dinosaur fossils
            on crumbling beaches. Or after a bracing walk along windswept coastal paths, warm up
            in a cosy English pub with a locally brewed beer.'
        ]);

        Post::factory()->create([
            'user_id' => $kevin->id,
            'category_id'=>$travel->id,
            'images' => ['/img/blogs/5/1.png'],
            'header' => 'UGANDA: THE LONG ROAD TO WATER',
            'body' => '„This is the top of the mound. It’s a nice sunny spot.“, says Mike Hammond. It only took us a few minutes to get here. A short trail through a thick forest of mangroves leads from the water to the top of the hill.
            „This is the highest point in Lee County“, says Mike. „30 feet above water.“ All thanks to the countless shells that the Calusa had piled over many generations to form this man-made hill.
            „Supposedly the more important you were the higher up on the mound you’d be.“, says Mike. He is the coordinator of the Calusa Blueway and joins me for my first leg. „Back then you’d be able look out and see your enemies approaching.
            You get a nicer breeze and if there’s a flood you’re up higher.“'
        ]);


        Post::factory()->create([
            'user_id' => $peter->id,
            'category_id'=>$sport->id,
            'header' => 'WHAT DO PRO ATHLETES EAT',
            'images' => ['/img/blogs/7/1.png']
        ]);

        Post::factory()->create([
            'user_id' => $peter->id,
            'category_id'=>$sport->id,
            'header' => 'GOALKEEPING: WHY SPECIFIC TRAINING IS SO VITAL',
            'images' => ['/img/blogs/6/1.png']
        ]);

        Post::factory()->create([
            'user_id' => $peter->id,
            'category_id'=>$sport->id,
            'header' => 'DRINKS FOR ATHLETES',
            'images' => ['/img/blogs/8/1.png']
        ]);

        Post::factory()->create([
            'user_id' => $peter->id,
            'category_id'=>$sport->id,
            'header' => 'DRINKS FOR ATHLETES',
            'images' => ['/img/blogs/8/1.png'],
            'created_at' => now()
        ]);

        Post::factory()->create([
            'user_id' => $peter->id,
            'category_id'=>$sport->id,
            'header' => 'WHAT DO COACHES ACTUALLY DO',
            'images' => ['/img/blogs/9/1.png'],
            'created_at' => now()
        ]);

        Post::factory()->create([
            'user_id' => $kevin->id,
            'category_id'=>$news->id,
            'header' => 'LESSONS LEARNED FROM WORKING ABROAD',
            'images' => ['/img/blogs/10/1.png'],
            'created_at' => now()
        ]);



        Post::factory(64)->create(['user_id' => $user1->id, 'category_id'=>$sport->id]);
        Post::factory(88)->create(['user_id' => $user1->id, 'category_id'=>$travel->id]);
        Post::factory(44)->create(['user_id' => $user1->id, 'category_id'=>$news->id]);
//
//        Post::factory(13)->create(['user_id' => $user2->id, 'category_id'=>$category1->id]);
//        Post::factory(14)->create(['user_id' => $user2->id, 'category_id'=>$category2->id]);
//        Post::factory(15)->create(['user_id' => $user2->id, 'category_id'=>$category3->id]);

//        Post::factory(5)->create();

//        foreach(Post::all() as $post){
//
//            for($i=1; $i<4; $i++){
//                Comment::factory()->create([
//                    'user_id' => $i,
//                    'post_id' => $post->id]);
//            }
//
//        }



    }


}
