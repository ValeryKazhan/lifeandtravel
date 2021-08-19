<header id="header">
    <div id="nav">
        <div id="nav-bottom">
            <div class="container">
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
            </div>
        </div>
    </div>
</header>


