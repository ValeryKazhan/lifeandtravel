@props(['post'])

@if($post->author->id == auth()->id())
        <div class="hidden lg:block">
            <form method="POST" action="{{$post->slug}}/delete"
                class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
            >

                @csrf

                <button type="submit"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                    Delete
                </button>
            </form>
        </div>
@endif
    <div class="hidden lg:block">
        <a href={{url("$post->slug")}}
            class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
        >Read More</a>
    </div>


