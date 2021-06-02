<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <div>
            <h1>Hello! This is my personal blog</h1>
            <p>Here should be the information about me</p>
            <a href="/blog">Go to my blog</a>
        </div>
    </body>
</html>