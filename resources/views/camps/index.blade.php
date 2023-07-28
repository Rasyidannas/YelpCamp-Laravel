@extends('layouts.app')

@section('title', 'YelpCamp - Camps')

@section('content')
    <div class=" bg-stone-100 rounded-s p-10 mb-3">
        <div class=" w-2/5 flex flex-col gap-1">
            <div class=" flex flex-col gap-1/2">
                <h2 class=" font-bold">Welcome to YelpCamp!</h2>
                <p>View our hand-picked campgrounds from all over the world, or add your own.</p>
            </div>
    
            <form action="#" class=" flex gap-1">
                <label class="relative block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-1">
                      <img src={{ Vite::asset('resources/assets/SearchIcon.svg') }}>
                    </span>
                    <input class="placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-1 pl-10 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for camps" type="text" name="search"/>
                </label>
                <button type="submit" class="btn btn--medium border w-full text-center bg-black text-white w-fit">Search</button>
            </form>

            <a href="#" class=" underline text-neutral-500">Or add your own campground</a>
        </div>
    </div>

    @forelse ($camps as $camp)
        <div class=" flex flex-wrap">
            @include('camps.partials.camp', [])
        </div>
    @empty
        <p class=" text-btn text-neutral-500">No Camps found</p>
    @endforelse
@endsection