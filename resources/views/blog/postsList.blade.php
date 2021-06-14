<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <div>
            <li><a href="/blog">Go to my blog</a></li>
            <li><a href="/">Go to my home page</a></li>
            <h1>Blog list</h1>

            @foreach ($posts as $post)
                <div>
                    <h1>{{$post->header}}</h1>
                    <li><a href= {{url("categories/".$post->category->slug)}}>Written by {{$post->user->name}}</a></li>
                    <li><a href= {{url("categories/".$post->category->slug)}}>Category: {{$post->category->name}}</a></li>
                    <p>
                        {{$post->body}}
                    </p>
                        <a href= {{url("/blog/".$post->slug)}}>Read the post</a>
                </div>
            @endforeach

        </div>
    </body>
</html>
