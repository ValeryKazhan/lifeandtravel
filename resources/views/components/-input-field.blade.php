@props(['labelName', 'type', 'name', 'id', 'value' => old($id)])

<div class="section-title">
    <h2 class="title">{{$labelName}}</h2>
</div>

<input class="border border-gray-400 p-2 w-full mb-4"
       type="{{$type}}"
       name="{{$name}}"
       id="{{$id}}"
       value="{{$value}}"
       required
>

@error("$id")
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror
