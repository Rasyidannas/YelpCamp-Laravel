@extends('layouts.app')

@section('title', 'Add New Camp')

@section('content')
    <div class=" flex flex-col gap-3 w-7/12 mx-auto">
        <h2 class=" font-bold">Add New Campground</h2>
        
        <form action="{{ route('camps.store') }}" method="POST" class="flex flex-col gap-6">
            @csrf
            {{-- Name Field --}}
            <div class=" flex flex-col gap-1/2">
                <label for="name" class=" text-neutral-500">Campground Name</label>
                <input class="placeholder:text-slate-400 block w-full border border-slate-100 bg-neutral-100 rounded-md py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" id="name" placeholder="Seven Sister Waterfall" type="text" name="name" value="{{ old('name', optional($camp ?? null)->name) }}"/>
            </div>
            {{-- Price Field --}}
            <div class=" flex flex-col gap-1/2">
                <label for="price" class=" text-neutral-500">Price</label>
                <input class="placeholder:text-slate-400 block w-full border border-slate-100 bg-neutral-100 rounded-md py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" id="price" placeholder="$149" type="text" name="price" value="{{ old('price', optional($camp ?? null)->price) }}"/>
            </div>
            {{-- Image Field --}}
            <div class=" flex flex-col gap-1/2">
                <label for="images" class=" text-neutral-500">Image</label>
                <input class="placeholder:text-slate-400 block w-full border border-slate-100 bg-neutral-100 rounded-md py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" id="images" placeholder="https://images.unsplash.com/" type="text" name="images" value="{{ old('Images', optional($camp ?? null)->images) }}"/>
            </div>
            {{-- Description Field --}}
            <div class=" flex flex-col gap-1/2">
                <label for="description" class=" text-neutral-500">Description</label>
                <textarea class="placeholder:text-slate-400 block w-full h-40 border border-slate-100 bg-neutral-100 rounded-md py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" id="description" placeholder="The Seven Sister is the 39th tallest waterfall in Norway. The 410-meter tall waterfall consist of seven separate streams, and the tallest of the seven has a free fall that measure 250 meters. The waterfall is located along the Geirangerfjorden in Stranda Municapality in More og Romsdal county, Norway." type="text" name="description">{{ old('description', optional($camp ?? null)->images) }}</textarea>
            </div>
            
            <button type="submit" class="btn btn--medium bg-black text-white">Add Campground</button>
        </form>
    </div>
@endsection