<div class="custom-pagination-container"
    style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; text-align: center;">

    <!-- Box Informasi Pagination -->
    <div class="custom-pagination-info-box"
        style="padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; margin-bottom: 10px;">
        <div class="custom-pagination-info" style="color: black; font-weight: 500; font-size: 18px;">
            Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
        </div>
    </div>

    <!-- Navigasi Pagination -->
    <ul class="custom-pagination-paginate"
        style="display: flex; padding-left: 0; list-style: none; gap: 10px; margin: 0;">

        <!-- Tombol Previous -->
        <li class="custom-page-item {{ $data->onFirstPage() ? 'disabled' : '' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->previousPageUrl() }}"
                style="background-color: #14532D; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #14532D;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#14532D'; this.style.color='white';">
                <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Previous
            </a>
        </li>

        <!-- Tombol Halaman -->
        @foreach ($data->links()->elements[0] as $page => $url)
        <li class="custom-page-item {{ $data->currentPage() == $page ? 'active' : '' }}" style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $url }}"
                style="background-color: {{ $data->currentPage() == $page ? '#16A34A' : '#374151' }};
                color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;
                border: 1px solid {{ $data->currentPage() == $page ? '#16A34A' : '#374151' }};
                transition: all 0.3s ease;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='{{ $data->currentPage() == $page ? '#16A34A' : '#374151' }}'; this.style.color='white';">
                {{ $page }}
            </a>
        </li>
        @endforeach

        <!-- Tombol Next -->
        <li class="custom-page-item {{ $data->hasMorePages() ? '' : 'disabled' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->nextPageUrl() }}"
                style="background-color: #14532D; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #14532D;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#14532D'; this.style.color='white';">
                Next <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </li>
    </ul>
</div>

<style>
    /* Style untuk tombol yang dinonaktifkan */
    .custom-page-item.disabled .custom-page-link {
        background-color: #9CA3AF !important;
        color: white !important;
        border-color: #9CA3AF !important;
        pointer-events: none;
    }
</style>
