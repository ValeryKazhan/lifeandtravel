@props(['labelName', 'type', 'name', 'id', 'value' => old($id)])

<label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10"
       for="$id"
>
    {{$labelName}}
</label>
<input class="border border-gray-400 p-2 w-full"
       type="{{$type}}"
       name="{{$name}}"
       id="{{$id}}"
       value="{{$value}}"
       required
>

{{--@error("$id")--}}
{{--<p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--@enderror--}}
