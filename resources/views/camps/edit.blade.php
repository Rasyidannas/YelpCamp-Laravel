@extends('layouts.app')

@section('title', $camp->name)

@section('content')
    <div class=" flex flex-col gap-3 w-7/12 mx-auto">
        <h2 class=" font-bold">Edit {{ $camp->name }}</h2>
        
        <form action="{{ route('camps.update', ['camp' => $camp->id]) }}" method="POST" class="flex flex-col gap-6">
            @csrf
            @method('PUT')
            @include('camps.partials.form')
            <div class=" flex gap-1">
                <a href="{{ route('camps.show', $camp->slug) }}" class="btn btn--medium btn--medium-secondary flex-1 text-center"> Cancel</a>
                <button type="submit" class="btn btn--medium bg-black text-white flex-1">Update</button>
            </div>
        </form>
    </div>
@endsection