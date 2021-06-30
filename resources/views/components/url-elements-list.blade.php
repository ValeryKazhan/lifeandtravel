@props(['key', 'list'])


@foreach($list as $element)

    <x-link
        :link="'?'.$key.'='.$element->id"
        :name="$element->name"
    />

@endforeach
