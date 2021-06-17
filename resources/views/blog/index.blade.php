<!DOCTYPE html>
<!--OLD CODE-->
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
<!--NEW CODE-->
<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-fullWidthPost></x-fullWidthPost>
        <x-halfWidthColumn>
            <x-postCard/>
            <x-postCard/>
        </x-halfWidthColumn>

        <x-thirdWidthColumn>
            <x-postCard/>
            <x-postCard/>
            <x-postCard/>
        </x-thirdWidthColumn>

    </main>
</x-layout>
