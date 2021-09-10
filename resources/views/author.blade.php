<x-layout>

    @include('header')
    <x-author-header
        :author="$currentAuthor"
    />

    <x-left-and-right-side>
        <x-slot name="leftSide">

            @if(count($posts)==0)
                <div class="mt-11">
                    <x-center>
                        <h1>
                            No posts yet from this author
                        </h1>
                    </x-center>
                </div>


            @else
            @foreach($posts as $post)
                <x-post-row
                    :post="$post"
                />
            @endforeach
            @endif


        </x-slot>
        <x-slot name="rightSide">
            <x-right-side-widgets/>
        </x-slot>
    </x-left-and-right-side>
    <div class="flex justify-center">
    {{$posts->links()}}
    </div>




</x-layout>
