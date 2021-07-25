<x-layout>
    @admin
    <section class="ps-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">

            <h1 class="text-center font-bold text-xl">Update User Data (Admin Only)</h1>
            <form method="POST" action="/admin/user/update/{{$user->id}}" class="mt-10">

                @csrf

                <div class="mb-6">
                    <x-input-field
                        :labelName="'Name'"
                        :type="'text'"
                        :name="'name'"
                        :id="'name'"
                        :value="$user->name"
                    />

                    <x-input-field
                        :labelName="'Username'"
                        :type="'text'"
                        :name="'username'"
                        :id="'username'"
                        :value="$user->username"
                    />

                    <x-input-field
                        :labelName="'Email'"
                        :type="'email'"
                        :name="'email'"
                        :id="'email'"
                        :value="$user->email"
                    />

                    <div class="mb-6 mt-10">
                        <x-submit-button>
                            Update
                        </x-submit-button>
                    </div>

{{--                    @if ($errors->any())--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li class="text-red-500 text-xs">{{$error}}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    @endif--}}
                </div>
            </form>


        </main>
    </section>
    @endadmin
</x-layout>
