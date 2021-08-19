@props(['post'])

<x--post-header
    :post="$post"
/>

<!-- section -->

<x--left-and-right-side>
    <x-slot name="leftSide">
        <x--post-share/>


        <!-- post content -->

        <div class="section-row">

            <figure>
                <img src="/img/media-1.jpg" alt="">
                <figcaption>Picture Description</figcaption>
            </figure>
            <p>{{$post->body}}</p>

            @if(auth()->id()==$post->author->id)
            <x-center>
                <x--pink-button-link
                    :class="'mr-10'"
                    :link="'/post/edit/'.$post->id"
                >
                    Edit Post
                </x--pink-button-link>

                <x--pink-button-link
                    :link="'/post/delete/'.$post->id"
                >
                    Delete Post
                </x--pink-button-link>
            </x-center>
            @endif


            <div>
                <x-comments-section
                    :post="$post"
                />
            </div>

        </div>


        <!-- /post content -->

        <!-- related post -->

        <x--three-posts-row
            :name="'Author\'s posts'"
            :posts="$post->author->posts->where('id', '!=', $post->id)->take(6)"
        />
    </x-slot>
    <x-slot name="rightSide">
        <x--right-side-widgets/>
    </x-slot>

    <!-- /related post -->
</x--left-and-right-side>




