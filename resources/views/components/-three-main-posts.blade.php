@props(['post1', 'post2', 'post3'])

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div id="hot-post" class="row hot-post">
            <div class="col-md-8 hot-post-left">
                <!-- post -->
                <x--post-thumb
                    :post="$post1"
                />
                <!-- /post -->
            </div>
            <div class="col-md-4 hot-post-right">
                <!-- post -->
                <x--post-thumb
                    :post="$post2"
                />
                <!-- /post -->

                <!-- post -->
                <x--post-thumb
                    :post="$post3"
                />
                <!-- /post -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
