@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="inline-flex gap-1">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{-- none when in first page --}}
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center btn btn--medium text-sm font-medium text-black bg-white border border-gray-400 leading-5 rounded-md hover:text-white hover:bg-black transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class=" ml-auto relative inline-flex items-center btn btn--medium text-sm font-medium text-black bg-white border border-gray-400 leading-5 rounded-md hover:text-white hover:bg-black transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            {{-- None when in last page --}}
        @endif
    </nav>
@endif
