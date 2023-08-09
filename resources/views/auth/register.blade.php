<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>YelpCamp - Sign Uo</title>
</head>
<body>
    <div class="container">
        <div class=" flex">
            <div class=" pb-4">
                <nav class="pt-2 flex items-center justify-between">
                    <figure>
                        <a href="/">
                            <img src={{ Vite::asset('resources/assets/Logo.svg') }} alt="Yelp Camp">
                        </a>
                    </figure>

                    <a href="{{ route('camps.index') }}" class="btn btn--medium font-light text-neutral-500 hover:text-black transition-all">Back to campgrounds</a>
                </nav>
    
                <div class="flex flex-col gap-2 pt-20">
                    <div class=" w-4/5 flex flex-col gap-2">
                        <h1 class=" text-neutral-900">Start Exploring camps from all around the world.</h1>

                        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-2">
                            @csrf
                            <x-form.inputText label="Full Name" name="name" type="text" placeholder="John Dower" :model="$camp ?? null"/>
                            <x-form.inputText label="Email" name="email" type="text" placeholder="Johndoe@example.com" :model="$camp ?? null"/>
                            {{-- Password field --}}
                            <div class="flex flex-col gap-1/2">
                                <label for="password" class="text-neutral-500">Password</label>
                                <div x-data="{
                                    passShow: false
                                }" class=" relative">
                                    <input class="@error('password') border-red-500 @else border-slate-100 @enderror
                                        placeholder:text-slate-400 block w-full border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                                        id="password" placeholder="Enter your password" x-bind:type="passShow ? 'text' : 'password' " name="password"/>
    
                                    <figure x-on:click="passShow = !passShow; console.log(passShow)" class="absolute top-1/2 right-1 translate-y-[-50%] cursor-pointer">
                                        <img src={{ Vite::asset('resources/assets/ShowIcon.svg') }} class=" w-[1.5rem] h-[1.5rem]" :class="passShow && 'hidden'" alt="Yelp Camp">
                                        <img src={{ Vite::asset('resources/assets/HiddenIcon.svg') }} class=" w-[1.5rem] h-[1.5rem]" :class="!passShow && 'hidden'" alt="Yelp Camp">
                                    </figure>
                                </div>
                                @error('password')
                                    <span class=" text-small text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn--medium bg-black text-white">Create an account</button>
                        </form>
                        
                        <p class=" text-small">Already a user? <span><a href="{{ route('login') }}" class="btn underline text-blue-400">Sign in</a></span></p>
                    </div>
                </div>
            </div>
    
            <div class=" relative -right-20 w-2/4 bg-stone-100 p-4 flex flex-col justify-center gap-2">
                <h4 class=" font-semibold tracking-wide leading-normal"> &quot;YelpCamp has honestly saved me hours of research time and the camps on here are definitely well picked and added.&quot;</h4>
                <div class=" flex gap-1">
                    <figure><img src="{{ Vite::asset('resources/assets/UserTestimonial.svg') }}" alt=""></figure>
                    <div>
                        <h5 class="btn">May Andrews</h5>
                        <p class="btn font-normal">Professional Hiker</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>