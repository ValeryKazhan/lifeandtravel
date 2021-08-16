@props(['comment'])

<div class="media">
    <div class="media-left">
        <img class="media-object" style="max-width: none" src="/img/avatar-2.jpg" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4>{{$comment->author->name}}</h4>
            <span class="time">
                <x--time-format
                    :time="$comment->created_at"
                />
            </span>
        </div>
        <p>{{$comment->body}}</p>
    </div>
</div>


