@props(['name', 'posts' => array()])

<!-- row -->
<div class="row">
    @if(isset($name))
    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title">{{$name}}</h2>
        </div>
    </div>
    @endif
    @props(['posts'])

    @foreach($posts as $post)

        @if(($loop->iteration % 2) == 1)
            <div class="clearfix visible-md visible-lg"></div>
        @endif
    <!-- post -->
        <x--post-half-page
            :post="$post"
        />

        <!-- /post -->
    @endforeach




</div>
<!-- /row -->
