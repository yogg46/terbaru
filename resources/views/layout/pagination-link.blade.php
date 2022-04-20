{{-- <div class="pagination">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>

                @if ($paginator->onFirstPage())
                    <span class=" relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>

            <span>

                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div> --}}
{{-- class="col-sm-12 col-md-7 d-flex " --}}
@if ($paginator->hasPages())
<ul class="pagination pagination-circle d-flex align-items-center justify-content-center justify-content-md-end">
    @if ($paginator->onFirstPage())
    <li class="page-item previous disabled"><a  class="page-link"><i class="previous"></i></a></li>
    @else
    <li wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="page-item previous "><a  class="page-link"><i class="previous"></i></a></li>
    @endif

    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
        <li class="page-item disabled d-none d-md-block" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="page-item active d-none d-md-block" aria-current="page"><span class="page-link">{{ $page }}</span></li>
            @else
                <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
            @endif
        @endforeach
    @endif
@endforeach

    {{-- <li class="page-item "><a href="#" class="page-link">1</a></li>
    <li class="page-item active"><a href="#" class="page-link">2</a></li>
    <li class="page-item "><a href="#" class="page-link">3</a></li>
    <li class="page-item "><a href="#" class="page-link">4</a></li>
    <li class="page-item "><a href="#" class="page-link">5</a></li>
    <li class="page-item "><a href="#" class="page-link">6</a></li> --}}
    @if ($paginator->hasMorePages())
    <li wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="page-item next"><a class="page-link"><i class="next"></i></a></li>
    @else
    <li class="page-item next disabled"><a  class="page-link"><i class="next"></i></a></li>

    @endif
</ul>
@endif

