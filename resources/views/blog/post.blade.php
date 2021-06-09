@extends('blog.postLayout')
@section('heading')
    {{$post->header}}
@endsection
@section('paragraph')
    {{$post->body}}
@endsection
<li><a href="/blog">Go to my blog</a></li>
<li><a href="/">Go to my home page</a></li>


