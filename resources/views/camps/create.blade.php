@extends('layouts.app')

@section('title', 'Add New Camp')

@section('content')
    <div class=" flex flex-col gap-3 w-7/12 mx-auto">
        <h2 class=" font-bold">Add New Campground</h2>
        
        <form action="{{ route('camps.store') }}" method="POST" class="flex flex-col gap-6">
            @csrf
            @include('camps.partials.form')
            <button type="submit" class="btn btn--medium bg-black text-white">Add Campground</button>
        </form>
    </div>
@endsection