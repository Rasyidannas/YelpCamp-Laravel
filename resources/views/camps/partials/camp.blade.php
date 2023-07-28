<div class=" p-1 border basis-[32%] flex flex-col gap-1 justify-between rounded">
    <figure class=" h-44 overflow-hidden rounded">
        <img src="{{ $camp->images }}" alt="{{ $camp->name }}" class=" relative -top-1">
    </figure>
    <div>
        <h5 class=" text-neutral-900 font-bold mb-1/2">{{ $camp->name }}</h5>
        <p class=" w-11/12">{{ substr($camp->description, 0, 70) }}...</p>
    </div>
    <a href="#" class="btn btn--medium border w-full text-center rounded hover:bg-black hover:text-white transition-all">View Campground</a>
</div>