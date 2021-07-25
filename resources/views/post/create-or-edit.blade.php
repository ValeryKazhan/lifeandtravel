

@php
    use App\Http\Middleware\MustBeAdmin;
    const EMPTY_STRING = '';
    if(isset($post)){
        $formName = 'Edit Your Post';
        $action="/post/update/$post->id";
        $header = $post->header;
        $body = $post->body;
        $sumbitButton = 'Edit';
        $authorId = $post->author->id;
    }
    else {
        $formName = 'Create Your Post';
        $action = '/post/create';
        $header = EMPTY_STRING;
        $body = EMPTY_STRING;
        $sumbitButton = 'Create';
        $authorId = auth()->id();
    }

@endphp






<x-layout>




    <section class="mt-10 ml-20 space-y-6">

        @auth
            <x-panel>


                <h1 class="text-center font-bold text-xl">{{$formName}}</h1>


                <form method="POST" action="{{$action}}">
                    @csrf

                    <x-input-field
                        :labelName="'Post Header'"
                        :type="'text'"
                        :name="'header'"
                        :id="'header'"
                        :value="$header"
                    />

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

                        required>{{$body}}</textarea>

                        @error('body')
                        <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <header class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10">
                        <label for="category_id">Choose The Category Of Your Post.<br>
                            @if(isset($post))
                            Your current category is {{$post->category->name}}
                            @endif
                        </label>
                    </header>

                    <select class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl py-2 px-5 font-semibold"
                            id="category_id"
                            name="category_id"
                    >
                        @foreach($categories as $category)
                            <div class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white">
                                <option value="{{$category->id}}" {{(isset($post)&&($category->id == $post->category->id) ? 'selected' : '')}}>{{$category->name}}</option>
                            </div>
                        @endforeach
                    </select>



                    <input type="hidden" id="user_id" name="user_id" value="{{$authorId}}">
                    @if(isset($post)&&(MustBeAdmin::isAdmin()))
                    <header class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10">
                        <label for="user_id">Change Author (admins only).<br>
                                Current Author is {{$post->author->name}}
                        </label>
                    </header>

                    <select class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl py-2 px-5 font-semibold"
                            id="user_id"
                            name="user_id"
                    >
                        @foreach($authors as $author)
                            <div class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white">
                                    <option value="{{$author->id}}" {{$author->id == $post->author->id ? 'selected' : ''}}>{{$author->name}}</option>
                            </div>
                        @endforeach
                    </select>
                    @endif



                    <div class="flex justify-end mt-4">
                        <x-submit-button>
                            {{$sumbitButton}}
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
