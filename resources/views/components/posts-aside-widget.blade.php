@props(['posts' => array(), 'name' => 'posts'])

<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">{{$name}}</h2>
    </div>

    @foreach($posts as $post)
    <!-- post -->
        <div class="post post-widget">
            <x--post-content
                :post="$post"
            />
        </div>
        <!-- /post -->
    @endforeach
</div>
<!-- /post widget -->
