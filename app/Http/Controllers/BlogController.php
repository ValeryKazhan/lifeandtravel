<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class BlogController extends Controller
{

    public array $posts;


  public function __construct(){
        include ('Post.php');
        $slug1 = 'firstBlog';
        $head1 = 'First blog page';
        $text1 = 'Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.
Text for first blog page. Text for first blog page. Text for first blog page. Text for first blog page.';

        $slug2 = 'secondBlog';
        $head2 = 'Second blog page';
        $text2 = 'Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.
Text for second blog page. Text for second blog page. Text for second blog page.';

        $slug3 = 'thirdBlog';
        $head3 = 'Third blog page';
        $text3 = 'Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.
Text for third blog page. Text for third blog page. Text for third blog page.';

        $this->posts = array(
            $slug1 => new Post($slug1, $head1, $text1),
            $slug2 => new Post($slug2, $head2, $text2),
            $slug3 => new Post($slug3, $head3, $text3)
        );


    }

    public function index(){
        return view ('blog.index');
    }

    public function blogList(){
        return view ('blog.blogListLayout', ['posts' => $this->posts]);
    }

    public function showPost($slug){
        $requiredPost = $this->posts[$slug];
        return view ("blog.post", ['post' => [
            'slug' => $requiredPost->getSlug(),
            'head' => $requiredPost->getHead(),
            'text' => $requiredPost->getText()
        ] ]);//существует ли более деликатный способ использования объектов во вьюшке, или хотя бы более деликатный способ разбиения объекта на массивы?
        //Где нужно размещать класс Post ? Он у меня висит в контроллерах, и я уверен, что это неправильно
    }

}
