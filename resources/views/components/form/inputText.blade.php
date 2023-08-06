<div>
    <div class="flex flex-col gap-1/2">
        <label for="{{ $name }}" class="text-neutral-500">{{ $label }}</label>
        <input class="{{ $errors->has($name) ? 'border-red-500' : 'border-slate-100' }}
            placeholder:text-slate-400 block w-full border bg-neutral-100 rounded-[.25rem] py-1 px-1 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
            id="{{ $name }}" placeholder="{{ $placeholder }}" type="{{ $type }}" name="{{ $name }}"
            value="{{ old($name, optional($model ?? null)->$name) }}"/>
        @if ($errors->has($name))
            <span class="text-small text-red-500">{{ $errors->first($name) }}</span>
        @endif
    </div>
</div>