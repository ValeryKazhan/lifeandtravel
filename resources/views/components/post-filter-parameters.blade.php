@props(['post'])

<x-filter-parameter
    :key="'cat'"
    :parameter="$post->category"
    :class="'px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold'"
    :style="'font-size: 10px'"
/>
<x-filter-parameter
    :key="'user'"
    :parameter="$post->user"
    :class="'px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold'"
    :style="'font-size: 10px'"
/>
