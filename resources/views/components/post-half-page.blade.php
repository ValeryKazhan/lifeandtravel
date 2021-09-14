@props(['post'])

<div class="col-md-6">
    <div class="post">
        <x-post-content
            :post="$post"
        />
    </div>
</div>
