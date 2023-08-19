<div class=" flex flex-col gap-6">
    {{-- Name Field --}}
    <x-form.input_text label="Name" name="name" type="text" placeholder="Seven Sister Waterfall" :model="$camp ?? null"/>
    {{-- Price Field --}}
    <x-form.input_text label="Price" name="price" type="text" placeholder="$149" :model="$camp ?? null"/>
    {{-- Image Field --}}
    <x-form.input_text label="Image" name="images" type="text" placeholder="https://images.unsplash.com/" :model="$camp ?? null"/>
    {{-- Description Field --}}
    <div class=" flex flex-col gap-1/2">
        <label for="description" class=" text-neutral-500">Description</label>
        <textarea class="@error('description') border-red-500 @else border-slate-100 @enderror
        placeholder:text-slate-400 block w-full h-40 border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm
        " id="description" placeholder="The Seven Sister is the 39th tallest waterfall in Norway. The 410-meter tall waterfall consist of seven separate streams, and the tallest of the seven has a free fall that measure 250 meters. The waterfall is located along the Geirangerfjorden in Stranda Municapality in More og Romsdal county, Norway." type="text" name="description">{{ old('description', optional($camp ?? null)->description) }}</textarea>
        @error('description')
            <span class=" text-small text-red-500">{{ $message }}</span>
        @enderror
    </div>
</div>