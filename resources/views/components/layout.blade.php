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
    <script src="/js/jquery.min.js" defer></script>
    <script src="/js/bootstrap.min.js" defer></script>
    <script src="/js/jquery.stellar.min.js" defer></script>
    <script src="/js/main.js" defer></script>




</head>

<body>



<div class="mt-6">
<x-nav>
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
        <div class="">
        <div class="nav-logo">
                <a href="\" class="logo"><img src="/img/logo4.png" alt="" class="" style="max-width: 100%; height: 35px"></a>
        </div>
        </div>
        <!-- /logo -->

        <!-- search & aside toggle -->



        <div class="nav-btns">
            <div class="nav-menu">

                @auth

                    <x-dropdown-element>
                        <a href="/authors/{{auth()->user()->username}}">
                        {{auth()->user()->name}}
                        </a>
                    </x-dropdown-element>

                    <x-dropdown-element>
                        <a>
                        <form method="POST" action="/sessions/logout">
                        @csrf
                            <button type="submit">LOG OUT</button>
                        </form>
                        </a>
                    </x-dropdown-element>
                @else
                        <x-dropdown-element><a href="/register/create">Register</a></x-dropdown-element>
                        <x-dropdown-element><a href="/sessions/login">Log In</a></x-dropdown-element>
                @endauth
                <x-search-button/>
                <x-search-field/>


            </div>

        </div>

        <!-- /search & aside toggle -->
    </div>
</div>
</x-nav>
</div>
    {{$slot}}
@include('footer')
</body>
