@extends('layouts.app')

@section('title', ' Camps')

@section('content')
    <div class=" bg-stone-100 rounded p-10 mb-3">
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
                    <input class="placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-[.25rem] py-1 pl-10 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for camps" type="text" name="search"/>
                </label>
                <button type="submit" class="btn btn--medium border text-center bg-black text-white w-fit">Search</button>
            </form>

            <a href="{{ route('camps.create') }}" class=" underline text-neutral-500 transition-all hover:text-black">Or add your own campground</a>
        </div>
    </div>

    <div class=" flex flex-wrap gap-6 justify-start">
        @forelse ($camps as $camp)
            @include('camps.partials.camp', [])
        @empty
            <div class="text-center w-full">
                <p class=" font-medium text-neutral-500">No Camps found</p>
            </div>
        @endforelse
    </div>
@endsection