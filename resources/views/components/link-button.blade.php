@props(['link', 'class' => 'transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8'])


    <a href="{{$link}}"
        class="{{$class}}"
    >{{$slot}}</a>

