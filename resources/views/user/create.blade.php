<x-layout>
    <section class="ps-6 py-8">
        <main class="max-w-xl mx-auto mt-10 p-6  border border-gray-200">

            <x--center>
                <h3 class="mt-3">Create New Account</h3>
            </x--center>

            <form method="POST" action="/register/create" class="mt-8">

                @csrf

                <div class="mb-6">
                    <x--input-field
                        :labelName="'Name'"
                        :type="'text'"
                        :name="'name'"
                        :id="'name'"
                    />

                    <x--input-field
                        :labelName="'Username'"
                        :type="'text'"
                        :name="'username'"
                        :id="'username'"/>

                    <x--input-field
                        :labelName="'Email'"
                        :type="'email'"
                        :name="'email'"
                        :id="'email'"/>

                    <x--input-field
                        :labelName="'Password'"
                        :type="'password'"
                        :name="'password'"
                        :id="'password'"
                        :value="''"
                    />

                    <div class="mb-6 mt-10">

                        <x--submit-button>
                            Submit
                        </x--submit-button>



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
