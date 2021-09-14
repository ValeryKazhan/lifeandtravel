@props(['post'])

<div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url('/img/header-1.jpg');"
         data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                </div>
                <h1>{{$post->header}}</h1>
                <ul class="post-meta">
                    <li><a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></li>
                    <li>
                        <x-time-format
                            :time="$post->created_at"
                        />
                    </li>
                    <li>
                        <i class="fa fa-comments"></i> {{($commentsNumber = count($post->comments))===0 ? 'NO COMMENTS' : $commentsNumber}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
