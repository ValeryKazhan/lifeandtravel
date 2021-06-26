@props(['key', 'list'])


@foreach($list as $element)
    <a href="?{{$key}}={{$element->id}}"
       class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 hover:text-white"
    >{{$element->name}}</a>
@endforeach
