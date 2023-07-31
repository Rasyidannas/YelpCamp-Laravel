<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>YelpCamp - @yield('title')</title>
</head>
<body>
    <div class="container mb-10">
        {{-- Navigation --}}
        @include('navs.topnav')
        {{-- this @yield for place @section when call --}}
        @yield('content')
    </div>

    <footer class=" py-5">
        <figure>
            <a href="/">
                <img src={{ Vite::asset('resources/assets/Logo.svg') }} alt="Yelp Camp">
            </a>
        </figure>
    </footer>
</body>
</html>