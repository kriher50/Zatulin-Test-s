@if ($paginator->hasPages())
    <nav class="flex items-center space-x-1" aria-label="Pagination">


        @foreach ($elements as $element)

            @if (is_string($element))
                <span class="inline-flex items-center px-3 py-2 text-gray-500 bg-gray-200 border border-gray-300 rounded-lg cursor-default">{{ $element }}</span>
            @endif


            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="inline-flex items-center px-3 py-2 text-blue-600 bg-white border border-blue-500 rounded-lg font-bold">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="inline-flex items-center px-3 py-2 text-blue-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach




    </nav>
@endif
