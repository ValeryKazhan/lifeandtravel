@php
    $categories=\App\Models\Category::all();
@endphp

<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
        <ul>
            @foreach($categories as $category)
            <li><a href="/categories/{{$category->slug}}">{{$category->name}} <span>{{count($category->posts)}}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
