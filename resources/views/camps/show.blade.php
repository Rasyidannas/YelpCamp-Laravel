@extends('layouts.app')

@section('title', $camp->name)

@section('content')
    <div class="flex justify-between gap-6">
        <div class="h-fit flex-1 flex flex-col gap-2">
            <figure class=" p-2 border rounded border-gray-400">
                <img src="{{ Vite::asset('resources/assets/Map.png') }}" alt="">
            </figure>
            {{-- Delete Camp --}}
            @auth
                @can('delete', $camp)
                    <form action="{{ route('camps.destroy', ['camp' => $camp->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn--medium btn--medium-secondary w-full text-center border-red-500 text-red-500 flex gap-1/2 items-end justify-center"> 
                            <img src="{{ Vite::asset('resources/assets/TrashIcon.svg') }}" alt="" class=" h-6 w-6 text-red-500">
                            Delete {{ $camp->name }}
                        </button>
                    </form>
                @endcan
            @endauth
        </div>

        <div class="w-2/3 flex flex-col gap-3">
            <div class=" p-2 border border-gray-400 rounded flex flex-col gap-1">
                <figure class="relative">
                    {{-- Edit Camp --}}
                    @auth
                        @can('update', $camp)
                            <a href="{{ route('camps.edit', $camp->slug) }}" class=" absolute top-1 right-1 btn--medium bg-white text-btn font-medium flex gap-1/2 items-end">
                                <img src="{{ Vite::asset('resources/assets/EditIcon.svg') }}" alt="" class=" h-6 w-6"> Edit Camp
                            </a>
                        @endcan
                    @endauth
                    <img src="{{ $camp->images }}" alt="{{ $camp->name }}" class="rounded w-full">
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
                <div class=" flex flex-col gap-6">
                    <h1 class=" text-heading-4">Comments</h1>
                    @forelse ($camp->comments as $comment)
                        <div x-data="{ edit:false }"
                         class=" flex flex-col gap-1/2">
                            <div class="relative flex gap-1">
                                <p class=" text-btn text-black font-bold">{{ $comment->user->name }}</p>
                                <p class=" text-btn">{{ $comment->created_at->diffForHumans() }}</p>
                                
                                {{-- Kebab Icon --}}
                                @auth
                                    @canany(['update', 'delete'], $comment)    
                                        <div x-data="{ open:false }"
                                            x-on:click="open = !open"
                                            x-on:click.outside="open = false"
                                            class=" ml-auto cursor-pointer group"
                                            >
                                            <div class="flex gap-[0.25rem] items-center">
                                                <div class=" w-1.5 h-1.5 bg-slate-400 rounded-1 group-hover:bg-slate-950 transition-all"></div>
                                                <div class=" w-1.5 h-1.5 bg-slate-400 rounded-1 group-hover:bg-slate-950 transition-all"></div>
                                                <div class=" w-1.5 h-1.5 bg-slate-400 rounded-1 group-hover:bg-slate-950 transition-all"></div>
                                            </div>
                                            <div x-show="open" class=" absolute right-0 z-50 mt-1/2 py-1/2 bg-white shadow-md rounded flex flex-col">
                                                <!-- Dropdown Item -->
                                                <a x-on:click="edit = !edit" class=" btn btn--small font-normal text-neutral-500 hover:text-neutral-950 hover:bg-slate-100 transition-all">Edit</a>
                                                <form action="{{ route('camp.comments.destroy', [$camp, $comment]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" btn btn--small font-normal text-neutral-500 hover:text-neutral-950 hover:bg-slate-100 transition-all">Delete</button>
                                                </form>

                                            </div>
                                        </div>
                                    @endcanany
                                @endauth
                            </div>
                            {{-- Comments --}}
                            <p :class="edit ? 'hidden' : '' ">{{ $comment->content }}</p>
                            {{-- Edit Comment --}}
                            <form x-show="edit" action="{{ route('camp.comments.update', [$camp, $comment]) }}" class=" relative" method="POST">
                                @csrf
                                @method('PUT')
                                <textarea class="@error('content') border-red-500 @else border-slate-100 @enderror
                                placeholder:text-slate-400 block w-full h-36 border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
                                " id="description" placeholder="This way probably the best camp i've visited this past year, definitely recommend visiting any time soon." type="text" name="content">{{ old('content', optional($comment ?? null)->content) }}</textarea>
                                <div class="absolute bottom-1 left-1 flex gap-1">
                                    <button x-on:click="edit = false" type="button" class=" btn btn--small btn--small-secondary text-black">cancel</button>
                                    <button type="submit" class=" btn btn--small bg-black text-white">Save</button>
                                </div>
                            </form>
                        </div>
                    @empty
                        <p class=" font-medium text-neutral-500">No Comments yet!</p>
                    @endforelse
                </div>

                <div class=" h-[1px] bg-gray-400"></div>

                {{-- Form Add New Comment --}}
                <div x-data="{ open:false }" 
                class="flex flex-col gap-2"
                >
                    <button x-on:click="open = !open" type="submit" class=" btn btn--medium text-center bg-black text-white flex gap-1/2 items-end justify-center self-end"> 
                        <img src="{{ Vite::asset('resources/assets/ChatBubble.svg') }}" alt="" class=" h-6 w-6">
                        Leave a Review
                    </button>
                    <div x-show="open" class=" flex flex-col gap-1">
                        <h5 class=" text-heading-5 font-semibold">Add New Comment</h5>
                        <form action="{{ route('camp.comments.store', $camp) }}" method="POST" class=" flex flex-col gap-1">
                            @csrf
                            <div class=" w-full flex flex-col gap-1/2">
                                <label for="content" class=" text-neutral-500">Description</label>
                                <textarea class="@error('content') border-red-500 @else border-slate-100 @enderror
                                placeholder:text-slate-400 block w-full h-40 border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
                                " id="content" placeholder="This way probably the best camp i've visited this past year, definitely recommend visiting any time soon." type="text" name="content"></textarea>
                                @error('content')
                                    <span class=" text-small text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class=" flex gap-1">
                                <a x-on:click="open = false" class=" flex-1 btn btn--medium btn--medium-secondary text-center cursor-pointer hover:bg-black hover:text-white transition-all">Cancel</a>
                                <button type="submit" class=" flex-1 btn btn--medium bg-black text-white">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection