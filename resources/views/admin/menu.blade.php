<x-layout>
    <h1 class="text-center font-bold text-xl">ADMIN PANEL</h1>
    <div class="text-center mt-10">
        <x-pink-button-link :link="'/admin/posts'">
            Posts
        </x-pink-button-link>
        <x-pink-button-link :link="'/admin/users'">
            Users
        </x-pink-button-link>
    </div>

    <x-flash
        :key="'user updated'"/>
    <x-flash
        :key="'user deleted'"/>

</x-layout>

