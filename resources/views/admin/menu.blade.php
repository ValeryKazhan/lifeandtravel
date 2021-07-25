<x-layout>
    <h1 class="text-center font-bold text-xl">ADMIN PANEL</h1>
    <div class="text-center mt-10">
        <x-link-button :link="'/admin/posts'">
            Posts
        </x-link-button>
        <x-link-button :link="'/admin/users'">
            Users
        </x-link-button>
    </div>

    <x-flash
        :key="'user updated'"/>
    <x-flash
        :key="'user deleted'"/>

</x-layout>

