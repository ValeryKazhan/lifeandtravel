@props(['key'])

@if(session()->has($key))

    <div class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{session($key)}}</p>
    </div>

@endif
