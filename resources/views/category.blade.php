<x-layout>

    @include('header')
    <x--category-header
        :category="$currentCategory"
    />

    <x--left-and-right-side>
        <x-slot name="leftSide">
            @foreach($posts as $post)
                @if($loop->iteration == 1)
                    <x--post-thumb
                        :post="$posts[0]"
                    />
                @elseif($loop->iteration>1 and $loop->iteration<6)

                    @if($loop->iteration%2 == 0)
                        <x--endline/>
                    @endif

                    <x--post-half-page
                        :post="$post"
                    />
                @else

                    @if($loop->iteration%3 == 0)
                        <x--endline/>
                    @endif

                    <x--post-third-page
                        :post="$post"
                    />
                @endif

            @endforeach

        </x-slot>
        <x-slot name="rightSide">
            <x--right-side-widgets/>
        </x-slot>


    </x--left-and-right-side>

    <div class="flex justify-center">
        {{$posts->links()}}
    </div>

    <x--ad-widget-horisontal/>
</x-layout>
