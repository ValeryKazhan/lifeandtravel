
<x-layout>




    <section class="mt-10 ml-20 space-y-6">

        @auth
            <x-panel>


                <h1 class="text-center font-bold text-xl">Create Your Post!</h1>


                <form method="POST" action="/post/create">
                    @csrf



                    <x-input-field
                        :labelName="'Post Header'"
                        :type="'text'"
                        :name="'header'"
                        :id="'header'"/>

{{--                    <input class="border border-gray-400 p-2 w-full"--}}
{{--                           type=""--}}
{{--                           name="{{$name}}"--}}
{{--                           id="{{$id}}"--}}
{{--                           value="{{$value}}"--}}
{{--                           required--}}
{{--                    >--}}

{{--                    @error("$id")--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--                    @enderror--}}

                    <header class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10">
                        <h2 >Content</h2>
                    </header>

                    <div class="mt-4">
                    <textarea
                        class="w-full text-sm"
                        name="body"
                        cols="30"
                        rows="5"
                        placeholder="Write down your post content"
                        required></textarea>

                        @error('body')
                        <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <header class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10">
                        <h2 >Choose The Category Of Your New Post</h2>
                    </header>

                    <x-dropdown>
                        <x-slot name="trigger">
                            <x-button>
                                {{ isset($currentCategory) ? $currentCategory->name : 'Categories'}}
                            </x-button>
                        </x-slot>
                        @foreach($categories as $category)
                            <div class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white">
                                <input
                                    type="radio"
                                    name="category_id"
                                    id="category_id"
                                    value="{{$category->id}}"
                                    required
                                >{{$category->name}}<br>
                            </div>

                            {{--                        <a>{{$category->name}}</a>--}}
                        @endforeach
                    </x-dropdown>

                    <div class="flex justify-end mt-4">
                        <x-submit-button>
                            Create
                        </x-submit-button>
                    </div>





                </form>
            </x-panel>
        @else
            <p class="font-semibold">
                <a href = "/register/create" class="hover:underline">Register</a> or <a href="/sessions/login" class="hover:underline">Log in</a> to leave a comment.
            </p>
        @endauth
    </section>

</x-layout>