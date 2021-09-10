<!DOCTYPE html>

<!--NEW CODE-->
<x-layout>
    @include('header')

    <body>

    <x-three-main-posts
        :post1="$posts[0]"
        :post2="$posts[1]"
        :post3="$posts[2]"
    />

    <x-left-and-right-side>
        <x-slot name="leftSide">

            @foreach($posts as $post)
                @if($loop->iteration>3)
                    @if($loop->iteration%2==0)
                        <x-endline/>
                    @endif
                    <x-post-half-page
                        :post="$post"
                    />
                @endif
            @endforeach




        </x-slot>
        <x-slot name="rightSide">
            <x-right-side-widgets/>

        </x-slot>
    </x-left-and-right-side>

    <div class="flex justify-center">
        {{$posts->links()}}
    </div>
    </body>


</x-layout>
