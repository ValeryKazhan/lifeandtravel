<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">

                @auth
                    <span class="text-xs font-bold uppercase">Welcome, {{auth()->user()->name}}!</span>

                    <form method="POST" action="/sessions/logout" class="text-xs font-semibold text-blue-500 ml-6">

                        @csrf
                        <button type="submit">Log Out</button>


                    </form>

                @else
                    <a href="/register/create" class="text-xs font-bold uppercase">Register</a>
                    <a href="/sessions/login" class="ml-3 text-xs font-bold uppercase">Log In</a>
                @endauth


                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>

            </div>

        </nav>

                    @auth
                        <nav class="md:flex md:justify-end md:items-center">
                            <a href="/post" class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-4 ml-100">
                                Create New Post
                            </a>
                       </nav>

                        <nav class="md:flex md:justify-end md:items-center">
                            <a href="/authors/{{auth()->user()->username}}" class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-4 ml-100">
                                My Posts
                            </a>
                        </nav>
                    @endauth
                    @admin
                    <nav class="md:flex md:justify-end md:items-center">
                        <a href="/admin/menu" class="bg-red-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-4 ml-100">
                            Admin Panel
                        </a>
                    </nav>
                    @endadmin








        {{$slot}}

        @include('footer')
    </section>

    <x-flash
        :key="'success'"
    />
    <x-flash
        :key="'post deleted'"
    />


</body>
