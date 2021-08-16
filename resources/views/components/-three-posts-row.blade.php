@props(['name'=>'posts', 'posts' => array()])
<!-- row -->
<x--row>
    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title">{{$name}}</h2>
        </div>
    </div>

    @foreach ($posts as $post)


        @if(($loop->iteration % 3) == 1)
            <x--endline/>
        @endif

    <!-- post -->
        <x--post-third-page
            :post="$post"
        />


        <!-- /post -->

    @endforeach



</x--row>
<!-- /row -->
