@props(['buttonProps' => '', 'class' => ''])

<button class="primary-button {{$class}}" {{$buttonProps}}  {{$attributes->merge(['type'=>''])}} >{{$slot}}</button>
