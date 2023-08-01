@extends('layouts.app')

@section('title', $camp->name)

@section('content')
    <div class="flex justify-between gap-6">
        <div class="h-fit flex-1 flex flex-col gap-2">
            <figure class=" p-2 border rounded border-gray-400">
                <img src="{{ Vite::asset('resources/assets/Map.png') }}" alt="">
            </figure>
            <form action="{{ route('camps.destroy', ['camp' => $camp->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn--medium btn--medium-secondary w-full text-center border-red-500 text-red-500 flex gap-1/2 items-end justify-center"> 
                    <img src="{{ Vite::asset('resources/assets/TrashIcon.svg') }}" alt="" class=" h-6 w-6 text-red-500">
                    Delete {{ $camp->name }}
                </button>
            </form>
        </div>

        <div class=" w-2/3 p-2 border border-gray-400 rounded flex flex-col gap-1">
            <figure class="relative">
                <a href="{{ route('camps.edit', $camp->slug) }}" class=" absolute top-1 right-1 btn--medium bg-white text-btn font-medium flex gap-1/2 items-end">
                    <img src="{{ Vite::asset('resources/assets/EditIcon.svg') }}" alt="" class=" h-6 w-6"> Edit Camp
                </a>
                <img src="{{ $camp->images }}" alt="{{ $camp->name }}" class="rounded">
            </figure>
            <div class="flex items-center justify-between">
                <h1 class=" text-heading-4">{{ $camp->name }}</h1>
                <h5 class=" font-medium">${{ $camp->price }}/night</h5>
            </div>
            <p>{{ $camp->description }}</p>
            <p class=" italic">Submitted by Author</p>
        </div>
    </div>
@endsection