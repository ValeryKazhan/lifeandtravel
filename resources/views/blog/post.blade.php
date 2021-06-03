@extends('blog.pages.post')
@section('heading')
    {{$posts[$number][0]}}
@endsection
@section('paragraph')
    {{$posts[$number][1]}}
@endsection
<li><a href="/blog">Go to my blog</a></li>
<li><a href="/">Go to my home page</a></li>


