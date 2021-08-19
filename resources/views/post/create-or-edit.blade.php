@php
    use App\Http\Middleware\MustBeAdmin;
    const EMPTY_STRING = '';
    if(isset($post)){
        $formName = 'Edit Your Post';
        $action="/post/update/$post->id";
        $header = $post->header;
        $body = $post->body;
        $submitButton = 'Edit';
        $authorId = $post->author->id;
    }
    else {
        $formName = 'Create Your Post';
        $action = '/post/create';
        $header = EMPTY_STRING;
        $body = EMPTY_STRING;
        $submitButton = 'Publish';
        $authorId = auth()->id();
    }

@endphp


<x-layout>
    <x--section>
        <x--container>
            @auth
                <x--center>
                    <h3 class="title mb-8">{{$formName}}</h3>
                </x--center>

                <form method="POST" action="{{$action}}">
                    @csrf
                    <x--title>
                        Post Title
                    </x--title>
                    <p>Type in your post title into the field below</p>
                    <input class="input mb-10"
                           type="text"
                           name="header"
                           id="header"
                           value="{{$header}}"
                           required
                    >
                    <x--title>
                        Content
                    </x--title>

                    <div class="form-group">
                            <textarea class="input"
                                      name="body"
                                      placeholder="Write down your post content"
                                      required
                            >{{$body}}</textarea>
                    </div>
                    @error('body')
                    <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                    <h4>
                        <label for="category_id">Choose The Category Of Your Post.<br>
                            @if(isset($post))
                                Your current category is {{$post->category->name}}
                            @endif
                        </label>
                    </h4>
                    <select class="dropdown-list"
                            id="category_id"
                            name="category_id"
                    >
                        @foreach($categories as $category)
                            <li class="dropdown">
                                <option
                                    value="{{$category->id}}" {{(isset($post)&&($category->id == $post->category->id) ? 'selected' : '')}}>{{$category->name}}</option>
                            </li>
                        @endforeach
                    </select>
                    <input type="hidden" id="user_id" name="user_id" value="{{$authorId}}">
                    @if(isset($post)&&(MustBeAdmin::isAdmin())&&isset($authors))
                        <header class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10">
                            <label for="user_id">Change Author (admins only).<br>
                                Current Author is {{$post->author->name}}
                            </label>
                        </header>
                        <select
                            class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl py-2 px-5 font-semibold"
                            id="user_id"
                            name="user_id"
                        >
                            @foreach($authors as $author)
                                <div class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white">
                                    <option
                                        value="{{$author->id}}" {{$author->id == $post->author->id ? 'selected' : ''}}>{{$author->name}}</option>
                                </div>
                            @endforeach
                        </select>
                    @endif
                    <div class="section-row mt-10">
                        <x--center>
                            <x--submit-button>
                                {{$submitButton}}
                            </x--submit-button>
                        </x--center>
                    </div>
                </form>
            @endauth
        </x--container>
    </x--section>
</x-layout>

