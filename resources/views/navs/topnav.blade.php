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
    <ul class=" flex gap-1 items-center">
        @guest
            <li><a href="{{ route('login') }}" class="font-normal btn btn--medium text-neutral-500 hover:text-neutral-900">Login</a></li>
            <li><a href="{{ route('register') }}" class="btn btn--medium text-white bg-black self-start">Create an account</a></li>
        @else
            {{-- this is when user logined --}}
            {{-- username --}}
            <li><span class=" btn text-neutral-500">{{ Auth::user()->name }}</span></li> 
            <form action="{{ route('logout') }}" method="POST" id="logout-form" class=" hidden">
                @csrf
            </form>
            <li><a href="{{ route('logout') }}" 
                class="font-normal btn btn--medium text-neutral-500 hover:text-neutral-900" 
                onclick="event.preventDefault();getElementById('logout-form').submit()"
                >Logout</a></li>
        @endguest
    </ul>
</nav>