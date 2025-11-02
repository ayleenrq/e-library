@if ($paginator->hasPages())
    <nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0 mt-8">
        <div class="flex w-0 flex-1">
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-300 cursor-not-allowed">
                    <i class="fa-solid fa-arrow-left mr-2"></i>
                    Previous
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500 hover:border-green-500 hover:text-green-600 transition">
                    <i class="fa-solid fa-arrow-left mr-2"></i>
                    Previous
                </a>
            @endif
        </div>

        <div class="hidden md:flex">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">
                        {{ $element }}
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="inline-flex items-center border-t-2 border-green-600 px-4 pt-4 text-sm font-medium text-green-600">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-green-500 hover:text-green-600 transition">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        <div class="flex w-0 flex-1 justify-end">
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500 hover:border-green-500 hover:text-green-600 transition">
                    Next
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            @else
                <span class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-300 cursor-not-allowed">
                    Next
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </span>
            @endif
        </div>
    </nav>

    <div class="flex justify-center mt-4 md:hidden">
        <span class="text-sm text-gray-700">
            Showing page <span class="font-semibold">{{ $paginator->currentPage() }}</span> of <span class="font-semibold">{{ $paginator->lastPage() }}</span>
        </span>
    </div>
@endif