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

        <div class="w-2/3 flex flex-col gap-3">
            <div class=" p-2 border border-gray-400 rounded flex flex-col gap-1">
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
                <p class=" italic">Submitted by {{ $camp->user->name }}</p>
            </div>
    
            {{-- Comments --}}
            <div class=" p-2 border border-gray-400 rounded flex flex-col gap-2">
                <h1 class=" text-heading-4">Comments</h1>

                <div class="flex flex-col gap-1">
                    <h5 class=" text-heading-5 font-semibold">Add New Comment</h5>
                    <form action="{{ route('camp.comments.store', $camp->id) }}" method="POST" class=" flex flex-col gap-1">
                        @csrf
                        <div class=" w-full flex flex-col gap-1/2">
                            <label for="content" class=" text-neutral-500">Description</label>
                            <textarea class="@error('content') border-red-500 @else border-slate-100 @enderror
                            placeholder:text-slate-400 block w-full h-40 border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
                            " id="description" placeholder="This way probably the best camp i've visited this past year, definitely recommend visiting any time soon." type="text" name="content">{{ old('content', optional($comment ?? null)->description) }}</textarea>
                            @error('content')
                                <span class=" text-small text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" flex gap-1">
                            <a href="/" class=" flex-1 btn btn--medium btn--medium-secondary text-center hover:bg-black hover:text-white transition-all">Cancel</a>
                            <button type="submit" class=" flex-1 btn btn--medium bg-black text-white">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection