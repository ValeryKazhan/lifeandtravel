
<x-layout>

    @include('header')
    <x-feature-post-card :post="$post"/>

    <section class="mt-10 ml-20 space-y-6">

        <x-comment-form
            :post="$post"
        />

        @foreach($post->comments as $comment)
            <x-post-comment
                :comment="$comment"
            />
        @endforeach



    </section>

    <x-flash
        :key="'post edited'"
    />

</x-layout>









