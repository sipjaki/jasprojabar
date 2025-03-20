
<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="/assets/icon/logokabupatenblora.png" alt="" width="40" style="margin-right: 10px;">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda akan menghapus data ini?</p>
                <p id="itemName" class="font-weight-bold"></p> <!-- Menampilkan nama item atau detail -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a id="confirmDelete" href="" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
