<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg"
                                                       alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">

        @php
         $dropdownElementsClass = "block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white";
        @endphp


        <!--  Category -->
        <x-dropdown>
            <x-slot name="trigger">
                <x-button>
                    {{ isset($currentCategory) ? $currentCategory->name : 'Categories'}}
                </x-button>
            </x-slot>
            @foreach($categories as $category)
                <a href="/categories/{{$category->slug}}" class="{{$dropdownElementsClass}}">{{$category->name}}</a>
            @endforeach
        </x-dropdown>


        <!-- Author -->
        <x-dropdown>
            <x-slot name="trigger">
                <x-button>
                    {{ isset($currentAuthor) ? $currentAuthor->name : 'Authors'}}
                </x-button>
            </x-slot>
            @foreach($authors as $author)
                <a href="/authors/{{$author->username}}" class="{{$dropdownElementsClass}}">{{$author->name}}</a>
            @endforeach
        </x-dropdown>
        <!-- Search -->
        <x-search-field/>
    </div>
</header>
