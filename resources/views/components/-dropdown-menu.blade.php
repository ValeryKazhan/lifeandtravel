

<li class="has-dropdown">
    <a>{{$trigger}}</a>
    <div class="dropdown">
        <div class="dropdown-body">
            <ul class="dropdown-list">
                {{$slot}}
            </ul>
        </div>
    </div>
</li>


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
