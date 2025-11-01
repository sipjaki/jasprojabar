<style>
.alertku {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    width: auto;
    max-width: 350px;
}

.alertku .alert {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;
    animation: slideUp 0.4s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Warna tambahan untuk error (karena Bootstrap tak punya .alert-error) */
.alert-error {
    background-color: #f44336;
    color: white;
}
</style>

<div class="alertku">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="fas fa-check-circle" style="font-size: 1.5em;"></span>
        <p class="mb-0">{{ session('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('update'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <span class="fas fa-info-circle" style="font-size: 1.5em;"></span>
        <p class="mb-0">{{ session('update') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('delete'))
    <div class="alert alert-error alert-dismissible fade show" role="alert">
        <span class="fas fa-bomb" style="font-size: 1.5em;"></span>
        <p class="mb-0">{{ session('delete') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('gagal'))
    <div class="alert alert-error alert-dismissible fade show" role="alert">
        <span class="fas fa-bomb" style="font-size: 1.5em;"></span>
        <p class="mb-0">{{ session('gagal') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<script>
// Auto-hide setelah 5 detik
setTimeout(() => {
    document.querySelectorAll('.alert').forEach(alert => {
        const bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
    });
}, 5000);
</script>
