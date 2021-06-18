<!DOCTYPE html>
<html lang="{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{config('app.name')}}</title>

    </head>
    <body>
        <div>
            <h1>@yield('heading')</h1>
            <p>
                @yield('paragraph')
            </p>
        </div>
        <li><a href="/blog">Go to my blog</a></li>
        <li><a href="/">Go to my home page</a></li>
    </body>
</html>
