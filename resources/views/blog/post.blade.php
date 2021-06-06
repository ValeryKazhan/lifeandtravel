@extends('blog.postLayout')
@section('heading')
    {{$post['head']}}
@endsection
@section('paragraph')
    {{$post['text']}}}
@endsection
<li><a href="/blog">Go to my blog</a></li>
<li><a href="/">Go to my home page</a></li>


