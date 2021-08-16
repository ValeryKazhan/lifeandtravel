<header id="header">
    <!-- NAV -->
    <div id="nav">


        <!-- Main Nav -->
        <div id="nav-bottom">
            <div class="container">
                <!-- nav -->
                <ul class="nav-menu">
                    <x--dropdown-menu>
                        <x-slot
                            name="trigger">{{ isset($currentCategory) ? $currentCategory->name : 'Categories'}}
                        </x-slot>

                        <x--dropdown-element>
                            <a href="/">All</a>
                        </x--dropdown-element>

                        @foreach($categories as $category)
                            <x--dropdown-element>
                                <a href="/categories/{{$category->slug}}">{{ucwords($category->name)}}</a>
                            </x--dropdown-element>
                        @endforeach
                    </x--dropdown-menu>

                    <x--dropdown-menu>
                        <x-slot
                            name="trigger">{{ isset($currentAuthor) ? $currentAuthor->name : 'Authors'}}
                        </x-slot>

                        <x--dropdown-element>
                            <a href="/">All</a>
                        </x--dropdown-element>

                        @foreach($authors as $author)
                            <x--dropdown-element>
                                <a href="/authors/{{$author->username}}">{{ucwords($author->name)}}</a>
                            </x--dropdown-element>
                        @endforeach
                    </x--dropdown-menu>

                </ul>
                <!-- /nav -->
            </div>
        </div>
        <!-- /Main Nav -->

        <!-- Aside Nav -->
{{--        <div id="nav-aside">--}}
{{--            <ul class="nav-aside-menu">--}}
{{--                <li><a href="index.html">Home</a></li>--}}
{{--                <li class="has-dropdown"><a>Categories</a>--}}
{{--                    <ul class="dropdown">--}}
{{--                        <li><a href="#">Lifestyle</a></li>--}}
{{--                        <li><a href="#">Fashion</a></li>--}}
{{--                        <li><a href="#">Technology</a></li>--}}
{{--                        <li><a href="#">Travel</a></li>--}}
{{--                        <li><a href="#">Health</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="about.html">About Us</a></li>--}}
{{--                <li><a href="contact.html">Contacts</a></li>--}}
{{--                <li><a href="#">Advertise</a></li>--}}
{{--            </ul>--}}
{{--            <button class="nav-close nav-aside-close"><span></span></button>--}}
{{--        </div>--}}
        <!-- /Aside Nav -->
    </div>
    <!-- /NAV -->

</header>


{{--Legacy--}}
{{--<header class="max-w-xl mx-auto mt-20 text-center">--}}
{{--    <h1 class="text-4xl">--}}
{{--        Latest <span class="text-blue-500">Laravel From Scratch</span> News--}}
{{--    </h1>--}}

{{--    <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg"--}}
{{--                                                       alt="Head of Lary the mascot"></h2>--}}

{{--    <p class="text-sm mt-14">--}}
{{--        Another year. Another update. We're refreshing the popular Laravel series with new content.--}}
{{--        I'm going to keep you guys up to speed with what's going on!--}}
{{--    </p>--}}

{{--    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">--}}

{{--        @php--}}
{{--         $dropdownElementsClass = "block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white";--}}
{{--        @endphp--}}


{{--        <!--  Category -->--}}
{{--        <x-dropdown>--}}
{{--            <x-slot name="trigger">--}}
{{--                <x-button>--}}
{{--                    {{ isset($currentCategory) ? $currentCategory->name : 'Categories'}}--}}
{{--                </x-button>--}}
{{--            </x-slot>--}}

{{--            <x-link--}}
{{--                :name="'All'"--}}
{{--                :link="'\\'"--}}
{{--            />--}}

{{--            @foreach($categories as $category)--}}
{{--                <a href="/categories/{{$category->slug}}" class="{{$dropdownElementsClass}}">{{$category->name}}</a>--}}
{{--            @endforeach--}}
{{--        </x-dropdown>--}}


{{--        <!-- Author -->--}}
{{--        <x-dropdown>--}}
{{--            <x-slot name="trigger">--}}
{{--                <x-button>--}}
{{--                    {{ isset($currentAuthor) ? $currentAuthor->name : 'Authors'}}--}}
{{--                </x-button>--}}
{{--            </x-slot>--}}

{{--            <x-link--}}
{{--                :name="'All'"--}}
{{--                :link="'\\'"--}}
{{--            />--}}

{{--            @foreach($authors as $author)--}}
{{--                <a href="/authors/{{$author->username}}" class="{{$dropdownElementsClass}}">{{$author->name}}</a>--}}
{{--            @endforeach--}}
{{--        </x-dropdown>--}}
{{--        <!-- Search -->--}}
{{--        <x-search-field/>--}}
{{--    </div>--}}
{{--</header>--}}
