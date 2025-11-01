<style>
/* ====== Pagination Styles ====== */

/* Semua tombol halaman default biru */
.custom-page-link {
    background-color: #0049c7; /* biru */
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    border: 1px solid #0049c7;
    transition: all 0.25s ease;
}

/* Previous & Next default hitam dengan font bold */
.custom-page-link.prev-next {
    background-color: #000;
    color: white;
    font-weight: bold;
    border: 1px solid #000;
}

/* Hover semua tombol: putih dengan tulisan hitam */
.custom-page-link:hover {
    background-color: #fff !important;
    color: #000 !important;
    transform: translateY(-2px);
}

/* Disabled tetap tidak bisa diklik */
.custom-page-item.disabled .custom-page-link {
    pointer-events: none;
    opacity: 0.5;
    transform: none !important;
}
</style>

<div class="custom-pagination-container"
     style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; text-align: center; font-size: 15px;">

    <!-- Info Box -->
    <div class="custom-pagination-info-box"
        style="padding: 12px 20px; border-radius: 8px; margin-bottom: 15px;
               background-color: #006aff; border: 1px solid #006aff; box-shadow: 0 4px 8px rgba(0,0,0,0.12);
               display: flex; align-items: center; justify-content: center; transition: all 0.15s ease-in-out;">
        <div class="custom-pagination-info" style="color: white; font-weight: 600; text-align: center;">
            📊 Data Ke <span style="color: currentColor;">{{ $data->firstItem() }}</span>
            Sampai <span style="color: currentColor;">{{ $data->lastItem() }}</span>
            Dari <span style="color: currentColor;">{{ $data->total() }}</span> Jumlah
            {{-- <span style="color: currentColor;">{{ $title }}</span> --}}
        </div>
    </div>

    <!-- Pagination Navigation -->
    @php
        $window = 2;
        $last = $data->lastPage();
        $current = $data->currentPage();
        $start = max($current - $window, 1);
        $end = min($current + $window, $last);
        $paginator = $data->appends(request()->except('page'));
    @endphp

    <ul class="custom-pagination-paginate"
        style="display: flex; padding-left: 0; list-style: none; gap: 10px; margin: 0; flex-wrap: wrap; justify-content: center;">

        {{-- Previous --}}
        <li class="custom-page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="display:flex; align-items:center;">
            <a class="custom-page-link prev-next" href="{{ $data->onFirstPage() ? '#' : $paginator->previousPageUrl() }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" style="width:16px; height:16px; margin-right:8px;">
                    <path d="M15 19l-7-7 7-7"/>
                </svg>
                Previous
            </a>
        </li>

        {{-- First page + leading ellipsis --}}
        @if($start > 1)
            <li style="display:flex; align-items:center;">
                <a class="custom-page-link" href="{{ $paginator->url(1) }}">1</a>
            </li>
            @if($start > 2)
                <li style="display:flex; align-items:center;"><span style="padding:8px 10px;">...</span></li>
            @endif
        @endif

        {{-- Middle pages --}}
        @for ($page = $start; $page <= $end; $page++)
            <li class="custom-page-item {{ $page == $current ? 'active' : '' }}" style="display:flex; align-items:center;">
                <a class="custom-page-link" href="{{ $paginator->url($page) }}">
                    {{ $page }}
                </a>
            </li>
        @endfor

        {{-- Trailing ellipsis + last page --}}
        @if($end < $last)
            @if($end < $last - 1)
                <li style="display:flex; align-items:center;"><span style="padding:8px 10px;">...</span></li>
            @endif
            <li style="display:flex; align-items:center;">
                <a class="custom-page-link" href="{{ $paginator->url($last) }}">{{ $last }}</a>
            </li>
        @endif

        {{-- Next --}}
        <li class="custom-page-item {{ !$data->hasMorePages() ? 'disabled' : '' }}" style="display:flex; align-items:center;">
            <a class="custom-page-link prev-next" href="{{ $data->hasMorePages() ? $paginator->nextPageUrl() : '#' }}">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" style="width:16px; height:16px; margin-left:8px;">
                    <path d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </li>

    </ul>
</div>
