@props(['post'])


<div class="mb-10">
    @if($post->author->id == auth()->id())
        <x-link-button
            :link="'/post/delete/'.$post->id"
        >
            Delete
        </x-link-button>
        <x-link-button
            :link="'/post/edit/'.$post->id"
        >
            Edit
        </x-link-button>
    @endif
</div>


