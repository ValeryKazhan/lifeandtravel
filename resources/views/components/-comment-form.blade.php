@props(['post'])


@auth
<div class="section-row">
    <div class="section-title">
{{--        <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="">--}}
        <h3 class="title">Leave a reply</h3>
    </div>

    <form class="post-reply" method="POST" action="/post/{{$post->slug}}/comments">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="input" name="body" placeholder="Message" required></textarea>
                    @error('body')
                    <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <button class="primary-button" type="submit">Submit</button>
            </div>

        </div>
    </form>
</div>
@else
    <p class="font-semibold">
        <a href = "/register/create" class="hover:underline">Register</a> or <a href="/sessions/login" class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth
