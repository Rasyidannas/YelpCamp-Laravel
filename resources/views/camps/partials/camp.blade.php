<div class="card__camp p-1 border border-gray-400 flex flex-col gap-1 justify-between rounded">
    <figure class=" h-44 relative overflow-hidden rounded">
        <div class=" absolute w-full h-full bg-black opacity-20 z-10"></div>
        <div class="absolute top-2.5 left-2.5 z-20 px-1 py-1.5 rounded bg-white"><p class=" text-btn font-medium text-black">${{ $camp->price }}</p></div>
        <img src="{{ $camp->images }}" alt="{{ $camp->name }}" class=" absolute">
    </figure>
    <div>
        <h5 class=" text-neutral-900 font-bold mb-1/2"><a href="{{ route('camps.show', $camp->slug) }}"> {{ $camp->name }} </a></h5>
        <p class=" w-11/12">{{ substr($camp->description, 0, 70) }}...</p>
    </div>
    <a href="{{ route('camps.show', $camp->slug) }}" class="btn btn--medium btn--medium-secondary w-full text-center rounded hover:bg-black hover:text-white transition-all">View Campground</a>
</div>