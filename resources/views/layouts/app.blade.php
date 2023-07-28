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
        <nav class="pt-2 w-full flex justify-between mb-3">
            <ul class=" flex gap-1">
                <li class=" self-center">
                    <figure>
                        <a href="/">
                            <img src={{ Vite::asset('resources/assets/Logo.svg') }} alt="Yelp Camp">
                        </a>
                    </figure>
                </li>
                <li><a href="/" class="btn btn--medium text-neutral-500 hover:text-neutral-900">Home</a></li>
            </ul>
            <ul class=" flex gap-1">
                <li><a href="/" class="btn btn--medium text-neutral-500 hover:text-neutral-900">Login</a></li>
                <li><a href="/" class="btn btn--medium text-white bg-black self-start">Create an account</a></li>
            </ul>
        </nav>
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