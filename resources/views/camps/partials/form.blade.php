{{-- Name Field --}}
<div class=" flex flex-col gap-1/2">
    <label for="name" class=" text-neutral-500">Campground Name</label>
    <input class="@error('name') border-red-500 @else border-slate-100 @enderror  
    placeholder:text-slate-400 block w-full border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
    " 
    id="name" placeholder="Seven Sister Waterfall" type="text" name="name" value="{{ old('name', optional($camp ?? null)->name) }}"/>
    @error('name')
        <span class=" text-small text-red-500">{{ $message }}</span>
    @enderror
</div>
{{-- Price Field --}}
<div class=" flex flex-col gap-1/2">
    <label for="price" class=" text-neutral-500">Price</label>
    <input class="@error('name') border-red-500 @else border-slate-100 @enderror
    placeholder:text-slate-400 block w-full border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
    " id="price" placeholder="$149" type="text" name="price" value="{{ old('price', optional($camp ?? null)->price) }}"/>
    @error('price')
        <span class=" text-small text-red-500">{{ $message }}</span>
    @enderror
</div>
{{-- Image Field --}}
<div class=" flex flex-col gap-1/2">
    <label for="images" class=" text-neutral-500">Image</label>
    <input class="@error('name') border-red-500 @else border-slate-100 @enderror
    placeholder:text-slate-400 block w-full border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
    " id="images" placeholder="https://images.unsplash.com/" type="text" name="images" value="{{ old('Images', optional($camp ?? null)->images) }}"/>
    @error('images')
        <span class=" text-small text-red-500">{{ $message }}</span>
    @enderror
</div>
{{-- Description Field --}}
<div class=" flex flex-col gap-1/2">
    <label for="description" class=" text-neutral-500">Description</label>
    <textarea class="@error('name') border-red-500 @else border-slate-100 @enderror
    placeholder:text-slate-400 block w-full h-40 border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
    " id="description" placeholder="The Seven Sister is the 39th tallest waterfall in Norway. The 410-meter tall waterfall consist of seven separate streams, and the tallest of the seven has a free fall that measure 250 meters. The waterfall is located along the Geirangerfjorden in Stranda Municapality in More og Romsdal county, Norway." type="text" name="description">{{ old('description', optional($camp ?? null)->description) }}</textarea>
    @error('description')
        <span class=" text-small text-red-500">{{ $message }}</span>
    @enderror
</div>