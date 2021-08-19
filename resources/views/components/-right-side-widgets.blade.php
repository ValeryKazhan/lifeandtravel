
@auth
    <x--title>
        {{auth()->user()->name}}
    </x--title>
@endauth

@admin

    <div class="flex justify-center mb-8">
        <x--pink-button-link
            :class="'color-gray-100'"
            :link="'/admin/menu'"
        >
            <x--text-width-const>
                ADMIN PANEL
            </x--text-width-const>
        </x--pink-button-link>
    </div>

@endadmin
@auth


     <div class="mb-8">
        <x--center>
            <div class="mb-8">
                <x--pink-button-link
                    :link="'/authors/'.auth()->user()->username"
                >
                    <x--text-width-const>
                        MY PAGE
                    </x--text-width-const>
                </x--pink-button-link>
            </div>
        </x--center>

        <x--center>

                <x--pink-button-link
                    :link="'/post'"
                >
                    <x--text-width-const>
                        CREATE POST
                    </x--text-width-const>
                </x--pink-button-link>

        </x--center>
     </div>








@endauth
<x--newsletter-widget/>
<x--social-widget/>
<x--category-widget/>


@php
 $posts = \App\Models\Post::query()->orderBy('created_at', 'desc')->take(5)->get();
@endphp
<x--posts-aside-widget
    :posts="$posts"
    :name="'Recent Posts'"

/>
