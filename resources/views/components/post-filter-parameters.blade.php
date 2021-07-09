@props(['post'])

<x-filter-parameter :href="'/categories/'.$post->category->slug">
    {{$post->category->name}}
</x-filter-parameter>


<x-filter-parameter :href="'/authors/'.$post->author->username">
    {{$post->author->name}}
</x-filter-parameter>
