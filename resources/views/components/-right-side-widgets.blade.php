
<x--ad-widget/>


@admin

    <div class="flex justify-center mb-12">
        <x--section>
        <x--pink-button-link
            :class="'color-gray-100'"
            :link="'/admin/menu'"
        >
            <div class="text-center" style="width: 100px">
                ADMIN PANEL
            </div>

        </x--pink-button-link>
        </x--section>
    </div>

@endadmin
@auth
     <div class="mb-8">
        <x--center>

                <x--pink-button-link
                    :link="'/authors/'.auth()->user()->username"
                >
                    <div class="text-center" style="width: 100px">
                        MY PAGE
                    </div>
                </x--pink-button-link>

        </x--center>

        <x--center>
            <x--section>
                <x--pink-button-link
                    :link="'/post'"
                >
                    <div class="text-center" style="width: 100px">
                        CREATE POST
                    </div>
                </x--pink-button-link>
            </x--section>
        </x--center>
     </div>








@endauth

<x--social-widget/>
<x--category-widget/>
{{--<x--newsletter-widget/>--}}

@php
 $posts = \App\Models\Post::query()->orderBy('created_at', 'desc')->take(3)->get();
@endphp
<x--posts-aside-widget
    :posts="$posts"
    :name="'Recent Posts'"

/>
