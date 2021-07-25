@props(['post'])

@auth
    <x-panel>
        <form method="POST" action="/post/{{$post->slug}}/comments">
            @csrf

            <header class="flex items-center">
                <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="">
                <h2 class="ml-6">Post a comment</h2>
            </header>

            <div class="mt-4">
                    <textarea
                        class="w-full text-sm focus:outline-none focus:ring"
                        name="body"
                        cols="30"
                        rows="5"
                        placeholder="Write down a comment"
                        required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
                @enderror

            </div>

            <div class="flex justify-end mt-4">
                <x-submit-button>
                    Post
                </x-submit-button>
            </div>





        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href = "/register/create" class="hover:underline">Register</a> or <a href="/sessions/login" class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth
