@extends('layouts.app')

@section('title', ' Camps')

@section('content')
    <div class="flex flex-col justify-between gap-2 p-10 mb-3 rounded  bg-stone-100 sm:flex-row">
        <div class="flex flex-col w-full gap-6  sm:w-2/4 md:w-2/5">
            <div class="flex flex-col w-full gap-1/2">
                <h2 class="font-bold ">Welcome to YelpCamp!</h2>
                <p>View our hand-picked campgrounds from all over the world, or add your own.</p>
            </div>
    
            {{-- Search form --}}
            <form action="{{ route('camps.index') }}" method="GET" class="flex flex-col gap-1  sm:flex-row">
                <label class="relative block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-1">
                      <img src={{ Vite::asset('resources/assets/SearchIcon.svg') }}>
                    </span>
                    <input class="placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-[.25rem] py-1 pl-10 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for name camp" type="text" name="search"/>
                </label>
                <button type="submit" class="w-full text-center text-white bg-black border  btn btn--medium sm:w-fit">Search</button>
            </form>

            <a href="{{ route('camps.create') }}" class="underline transition-all  text-neutral-500 hover:text-black">Or add your own campground</a>
        </div>
        {{-- Sort Dropdown Button --}}
        <div x-data="{ open: false }"
            x-on:click.outside="open = false" 
            class="relative self-end"
        >
            <button x-on:click="open = !open" class="flex items-center font-normal transition-all  btn btn--small btn--small-secondary gap-1/2 hover:bg-black hover:text-white">
                Sort by
                <svg height="1rem" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" fill="currentColor" viewBox="0 0 512 512" width="1rem" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/></svg>
            </button>
            <ul x-cloak x-show="open" class="absolute right-0 z-50 flex flex-col w-48 bg-white rounded shadow-md  mt-1/2 py-1/2">
                <li>
                    <a href="{{ route('camps.index', ['sort' => 'oldest']) }}" class="w-full font-normal transition-all btn btn--small text-neutral-500 hover:text-neutral-950 hover:bg-slate-100">Oldest to newest</a>
                </li>
                <li>
                    <a href="{{ route('camps.index', ['sort' => 'newest']) }}" class="w-full font-normal transition-all btn btn--small text-neutral-500 hover:text-neutral-950 hover:bg-slate-100">Newest to oldest</a>
                </li>
                <li>
                    <a href="{{ route('camps.index', ['sort' => 'lower_price']) }}" class="w-full font-normal transition-all btn btn--small text-neutral-500 hover:text-neutral-950 hover:bg-slate-100">Lower price to higher price</a>
                </li>
                <li>
                    <a href="{{ route('camps.index', ['sort' => 'higher_price']) }}" class="w-full font-normal transition-all btn btn--small text-neutral-500 hover:text-neutral-950 hover:bg-slate-100">Higher price to lower price</a>
                </li>
                <li>
                    <a href="{{ route('camps.index', ['sort' => 'owner']) }}" class="w-full font-normal transition-all btn btn--small text-neutral-500 hover:text-neutral-950 hover:bg-slate-100">Owner</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex flex-wrap justify-start gap-6 ">
        @forelse ($camps as $camp)
            @include('camps.partials.camp', [])
        @empty
            <div class="w-full text-center">
                <p class="font-medium  text-neutral-500">No Camps Found</p>
            </div>
        @endforelse
    </div>

    <div class="flex justify-end mt-2">
        {{ $camps->appends(request()->query())->links() }}
    </div>
@endsection