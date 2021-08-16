<x-layout>

    @include('header')
    <x--author-header
        :author="$currentAuthor"
    />

    <x--left-and-right-side>
        <x-slot name="leftSide">
            @foreach($posts as $post)
                <x--post-row
                    :post="$post"
                />
            @endforeach



        </x-slot>
        <x-slot name="rightSide">
            <x--right-side-widgets/>
        </x-slot>
    </x--left-and-right-side>
    <div class="flex justify-center">
    {{$posts->links()}}
    </div>





</x-layout>
