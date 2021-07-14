@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex">
        <div class="flex-shrink-0">
            <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{$comment->id}}" alt="">
        </div>

        <div class="ml-6">
            <header class="mb-4">
                <h3 class="font-bold">{{$comment->author->name}}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{$comment->created_at->format("F j, Y, g:i a")}}</time></p>
            </header>

            <p>
                {{$comment->body}}
            </p>
        </div>
    </article>
</x-panel>

