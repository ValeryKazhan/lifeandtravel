<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <div>
            <a href="/">Go to home page</a>
            <h1>Blog list</h1>

            @foreach ($posts as $post)
                <div>
                    <h1>{{$post->getHead()}}</h1>
                    <p>
                        {{$post->getText()}}
                    </p>
                        <a href= {{url("/blog/".$post->getSlug())}}>Read the post</a>
                </div>
            @endforeach

        </div>
    </body>
</html>
