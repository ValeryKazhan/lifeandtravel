@props(['key', 'parameter', 'class', 'style'])
<a href="?{{$key}}={{$parameter->id}}"
   class="{{$class}}"
   style="{{$style}}">{{$parameter->name}}</a>
