@extends('layouts.app')

@section('title', $camp->name)

@section('content')
    <div class="flex justify-between">
        <div class=" p-2 border rounded h-fit">
            <img src="{{ Vite::asset('resources/assets/Map.png') }}" alt="">
        </div>

        <div class=" w-7/12 p-2 border rounded flex flex-col gap-1">
            <figure>
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