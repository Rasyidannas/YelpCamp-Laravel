<nav class="pt-2 w-full flex justify-between mb-3">
    <ul class=" flex gap-1">
        <li class=" self-center">
            <figure>
                <a href="/">
                    <img src={{ Vite::asset('resources/assets/Logo.svg') }} alt="Yelp Camp">
                </a>
            </figure>
        </li>
        <li><a href="{{ route('camps.index') }}" class="{{ Request::is('camps') ? 'font-bold' : 'font-normal' }} btn btn--medium text-neutral-500 hover:text-neutral-900">Home</a></li>
    </ul>
    <ul class=" flex gap-1">
        <li><a href="/" class="font-normal btn btn--medium text-neutral-500 hover:text-neutral-900">Login</a></li>
        <li><a href="/" class="btn btn--medium text-white bg-black self-start">Create an account</a></li>
    </ul>
</nav>