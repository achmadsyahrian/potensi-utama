<div class="news-pagination">
    <ul class="justify-content-center">
        {{-- Previous Page Link --}}
        @if ($data->onFirstPage())
            <li class="disabled"><a><span>&laquo; </span></a></li>
        @else
            <li><a href="{{ $data->previousPageUrl() }}" rel="prev">&laquo; </a></li>
        @endif

        {{-- Page Number Links --}}
        @php
            $currentPage = $data->currentPage();
            $totalPages = $data->lastPage();
            $showRange = 1; // Jumlah halaman yang ditampilkan di sebelah kiri dan kanan halaman saat ini
        @endphp

        {{-- Display the first page --}}
        @if ($currentPage > 1 + $showRange)
            <li><a href="{{ $data->url(1) }}">1</a></li>
            @if ($currentPage > 2 + $showRange)
                <li class="disabled"><span>&hellip;</span></li>
            @endif
        @endif

        {{-- Display previous pages --}}
        @for ($i = max($currentPage - $showRange, 1); $i < $currentPage; $i++)
            <li><a href="{{ $data->url($i) }}">{{ $i }}</a></li>
        @endfor

        {{-- Display the current page --}}
        <li class="active"><a href="{{ $data->url($currentPage) }}">{{ $currentPage }}</a></li>

        {{-- Display next pages --}}
        @for ($i = $currentPage + 1; $i <= min($currentPage + $showRange, $totalPages); $i++)
            <li><a href="{{ $data->url($i) }}">{{ $i }}</a></li>
        @endfor

        {{-- Display the last page --}}
        @if ($currentPage < $totalPages - $showRange)
            @if ($currentPage < $totalPages - 1 - $showRange)
                <li class="disabled"><span>&hellip;</span></li>
            @endif
            <li><a href="{{ $data->url($totalPages) }}">{{ $totalPages }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($data->hasMorePages())
            <li><a href="{{ $data->nextPageUrl() }}" rel="next"> &raquo;</a></li>
        @else
            <li class="disabled"><a><span> &raquo;</span></a></li>
        @endif
    </ul>
</div>
