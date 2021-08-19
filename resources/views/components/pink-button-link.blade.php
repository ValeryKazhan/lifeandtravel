@props(['link', 'class' => '', 'buttonProps'])

<a href="{{$link}}" class="primary-button {{$class}}">{{$slot}}</a>
