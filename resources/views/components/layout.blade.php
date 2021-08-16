<!doctype html>



<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>The Blog</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/main.js"></script>




</head>

<body>



<div class="mt-6">
<x--nav>
<div id="nav-top">
    <div class="container">
        <!-- social -->
        <ul class="nav-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <!-- /social -->

        <!-- logo -->
        <div class="nav-logo">
            <a href="\" class="logo"><img src="/img/logo.png" alt=""></a>
        </div>
        <!-- /logo -->

        <!-- search & aside toggle -->



        <div class="nav-btns">
            <div class="nav-menu">



                @auth




                    <x--dropdown-element>
                        <span>Welcome, {{auth()->user()->name}}!</span>
                    </x--dropdown-element>

                    <x--dropdown-element>
                        <form method="POST" action="/sessions/logout">
                        @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    </x--dropdown-element>
                @else
                    <x--dropdown-element><a href="/register/create">Register</a></x--dropdown-element>
                    <x--dropdown-element><a href="/sessions/login">Log In</a></x--dropdown-element>
                @endauth
{{--                <x--search-button/>--}}
{{--                <x--search-field/>--}}


            </div>

        </div>

        <!-- /search & aside toggle -->
    </div>
</div>
</x--nav>
</div>
    {{$slot}}
@include('footer')
</body>

{{--Legacy--}}
{{--<title>Laravel From Scratch Blog</title>--}}
{{--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--<link rel="preconnect" href="https://fonts.gstatic.com">--}}
{{--<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">--}}
{{--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}

{{--<body style="font-family: Open Sans, sans-serif">--}}
{{--    <section class="px-6 py-8">--}}
{{--        <nav class="md:flex md:justify-between md:items-center">--}}
{{--            <div>--}}
{{--                <a href="/">--}}
{{--                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="mt-8 md:mt-0 flex items-center">--}}

{{--                @auth--}}
{{--                    <span class="text-xs font-bold uppercase">Welcome, {{auth()->user()->name}}!</span>--}}

{{--                    <form method="POST" action="/sessions/logout" class="text-xs font-semibold text-blue-500 ml-6">--}}

{{--                        @csrf--}}
{{--                        <button type="submit">Log Out</button>--}}


{{--                    </form>--}}

{{--                @else--}}
{{--                    <a href="/register/create" class="text-xs font-bold uppercase">Register</a>--}}
{{--                    <a href="/sessions/login" class="ml-3 text-xs font-bold uppercase">Log In</a>--}}
{{--                @endauth--}}


{{--                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">--}}
{{--                    Subscribe for Updates--}}
{{--                </a>--}}

{{--            </div>--}}

{{--        </nav>--}}

{{--                    @auth--}}
{{--                        <nav class="md:flex md:justify-end md:items-center">--}}
{{--                            <a href="/post" class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-4 ml-100">--}}
{{--                                Create New Post--}}
{{--                            </a>--}}
{{--                       </nav>--}}

{{--                        <nav class="md:flex md:justify-end md:items-center">--}}
{{--                            <a href="/authors/{{auth()->user()->username}}" class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-4 ml-100">--}}
{{--                                My Posts--}}
{{--                            </a>--}}
{{--                        </nav>--}}
{{--                    @endauth--}}
{{--                    @admin--}}
{{--                    <nav class="md:flex md:justify-end md:items-center">--}}
{{--                        <a href="/admin/menu" class="bg-red-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-4 ml-100">--}}
{{--                            Admin Panel--}}
{{--                        </a>--}}
{{--                    </nav>--}}
{{--                    @endadmin--}}








{{--        {{$slot}}--}}

{{--        @include('footer')--}}
{{--    </section>--}}

{{--    <x-flash--}}
{{--        :key="'success'"--}}
{{--    />--}}
{{--    <x-flash--}}
{{--        :key="'post deleted'"--}}
{{--    />--}}


{{--</body>--}}
{{--Endlegacy--}}
