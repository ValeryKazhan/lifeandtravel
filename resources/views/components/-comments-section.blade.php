@props(['post'])

<section class="mt-10 ml-20 space-y-6">

    <x--comment-form
        :post="$post"
    />


    <!-- post comments -->
    @if(($commentsNumber=count($post->comments)) > 0)
    <div class="section-row">
        <div class="section-title">
            <h3 class="title">{{$commentsNumber}} Comments</h3>
        </div>

        <div class="post-comments">
            <!-- comment -->
            @foreach($post->comments as $comment)
                <x--post-comment
                    :comment="$comment"
                />
            @endforeach

            <!-- /comment -->
        </div>

    </div>
    @endif
    <!-- /post comments -->
</section>
