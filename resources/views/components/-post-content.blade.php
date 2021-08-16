@props(['post'])

<a class="post-img" href="/post/{{$post->slug}}"><img src="/img/post-9.jpg" alt=""></a>
<div class="post-body">
    <div class="post-category">
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </div>
    <h3 class="post-title title-sm"><a href="/post/{{$post->slug}}">{{$post->header}}</a></h3>
    <ul class="post-meta">
        <li><a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></li>
        <li>
            <x--time-format
                :time="$post->created_at"
            />
        </li>
    </ul>
</div>
