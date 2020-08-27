<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- SEO -->
     <meta name="author" content="WebSystem" href="https://websystem.sk">
     <meta name="robots" content="index, follow">
     <meta name="keywords" content="e-shop, webová stránka, blog, aplikácia, vývoj, design">
     <meta name="description" content="Venujeme sa vývoju a designu webových stránok a aplikácií. Ak potrebujete e-shop webovú stránku, alebo blog či
        aplikáciu na mieru,
        tak neváhajte a kľudne sa nám ozvyte upresníme detaili a začneme na tom pracovať.">
     <meta property="og:site_name" content="movie.websystem">
     <meta property="og:locale" content="sk_SK">
     <meta property="og:image:height" content="503">
     <meta property="og:image:width" content="961">
     <meta property="og:description" content="Ak potrebujete e-shop webovú stránku, alebo blog či aplikáciu na mieru, tak neváhajte a ozvyte sa! Upresníme detaili a začneme na tom pracovať">
     <meta property="og:title" content="WebSystem | Movie | Filmová aplikácia">
     <meta property="og:url" content="https://movie.websystem.sk">
     <meta property="og:image" content="{{ asset('og/facebook_og_img.png') }}">
     <!-- end SEO -->

     <!-- end Favicons -->
     <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
     <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
     <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
     <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
     <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
     <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
     <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
     <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
     <meta name="theme-color" content="#ffffff">
     <!-- end Favicons -->


    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ url('https://websystem.sk') }}">
                        <img class="img-fluid" src="{{ asset('img/video.svg') }}" width="32" alt="Movie_logo">
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Filmy</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV relácie</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Herci</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="{{ url('/') }}">
                        <img src="/img/WS-logo.png" alt="avatar" class="h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <livewire:scripts />
    @yield('scripts')
</body>

</html>
