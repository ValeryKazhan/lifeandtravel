@props(['post'])

<div class="post post-row">
    <a class="post-img" href="/post/{{$post->slug}}"><img src="/img/post-13.jpg" alt=""></a>
    <div class="post-body">
        <div class="post-category">
            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </div>
        <h3 class="post-title"><a href="/post/{{$post->slug}}">{{$post->header}}</a></h3>
        <ul class="post-meta">
            <li><a href="/authors/{{$post->author->slug}}">{{$post->author->name}}</a></li>
            <li>
                <x-time-format
                    :time="$post->created_at"
                />
            </li>
        </ul>
        <p>{{$post->body}}</p>

        @if(auth()->id()==$post->author->id)

        <x-pink-button-link
            :class="'mr-10'"
            :link="'/post/edit/'.$post->id"
        >
            Edit Post
        </x-pink-button-link>

        <x-pink-button-link
            :link="'/post/delete/'.$post->id"
        >
            Delete Post
        </x-pink-button-link>

        @endif
    </div>
</div>
