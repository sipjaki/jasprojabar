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
                style="background-color: navy; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid navy;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Previous
            </a>
        </li>

        <!-- Tombol Next -->
        <li class="custom-page-item {{ $data->hasMorePages() ? '' : 'disabled' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->nextPageUrl() }}"
                style="background-color: navy; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid navy;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                Next <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </li>
    </ul>
</div>


<style>
    /* Hover effect */
    .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
        background-color: #fff !important; /* Keep the background white on hover */
        color: black !important; /* Change text color to black on hover */
    }

    .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
        color: black !important; /* Ensure the icon color changes to black */
    }
</style>
