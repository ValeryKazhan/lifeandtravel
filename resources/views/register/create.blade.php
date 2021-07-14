<x-layout>
    <section class="ps-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">

            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register/create" class="mt-10">

                @csrf

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10"
                           for="name"
                    >
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                    >

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10"
                           for="username"
                    >
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="username"
                       id="username"
                       value="{{old('username')}}"
                       required
                    >

                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10"
                           for="email"
                    >
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{old('email')}}"
                           required
                    >

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-10"
                           for="password"
                    >
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="mb-6 mt-10">

                        <x-submit-button>
                            Submit
                        </x-submit-button>



                    </div>

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif




                </div>
            </form>


        </main>
    </section>
</x-layout>
