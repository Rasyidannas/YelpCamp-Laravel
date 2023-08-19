<nav class="pt-2 w-full flex justify-between gap-1 mb-3 relative">
    <ul class=" flex gap-1">
        <li class=" self-center">
            <figure>
                <a href="/">
                    <img src={{ Vite::asset('resources/assets/Logo.svg') }} alt="Yelp Camp">
                </a>
            </figure>
        </li>
    </ul>
    
    <div x-data="{open:false}" 
        class="block sm:hidden"
        >
        <div x-on:click="open = !open" class=" bg-white p-1/2 rounded cursor-pointer flex items-center justify-center">
            <img src={{ Vite::asset('resources/assets/HamburgerMenu.svg') }} alt="Yelp Camp">
        </div>
        
        <ul x-show="open" class="absolute -left-3 -right-3 z-50 bg-white text-center p-3 shadow-md rounded flex flex-col gap-1/2">
            <li><a href="{{ route('camps.index') }}" class="{{ Request::is('camps') ? 'font-bold' : 'font-normal' }} btn btn--medium text-neutral-500 hover:text-neutral-900">Home</a></li>
            @guest
                <li><a href="{{ route('login') }}" class="font-normal btn btn--medium text-neutral-500 hover:text-neutral-900">Login</a></li>
                <li><a href="{{ route('register') }}" class=" w-full btn btn--medium text-white bg-black self-start">Create an account</a></li>
            @else
                {{-- this is when user logined --}}
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
    </div>

    <ul class=" w-full hidden sm:flex gap-1 items-center">
        <li class="mr-auto"><a href="{{ route('camps.index') }}" class="{{ Request::is('camps') ? 'font-bold' : 'font-normal' }} btn btn--medium text-neutral-500 hover:text-neutral-900">Home</a></li>
        @guest
            <li><a href="{{ route('login') }}" class="font-normal btn btn--medium text-neutral-500 hover:text-neutral-900">Login</a></li>
            <li><a href="{{ route('register') }}" class="btn btn--medium text-white bg-black self-start">Create an account</a></li>
        @else
            {{-- this is when user logined --}}
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