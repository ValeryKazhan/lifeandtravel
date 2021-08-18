@props(['comment'])

<div class="media">
    <div class="media-left">
        <a href="/authors/{{$comment->author->username}}"><img class="media-object" style="max-width: none" src="/img/avatar-2.jpg" alt=""></a>
    </div>
    <div class="media-body">
        <div class="media-heading">
            <a href="/authors/{{$comment->author->username}}"><h4>{{$comment->author->name}}</h4></a>
            <span class="time">
                <x--time-format
                    :time="$comment->created_at"
                />
            </span>
        </div>
        <p>{{$comment->body}}</p>
    </div>
</div>


