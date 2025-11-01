<style>
/* ==== AREA TABLE DAN RESPONSIVE ==== */
.table-responsive {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 8px;
}

/* Pastikan kolom tetap muncul di layar kecil */
@media (max-width: 767px) {
    .cart__table th,
    .cart__table td {
        display: table-cell !important;
        visibility: visible !important;
        white-space: nowrap !important;
    }
}

/* ==== STYLE TOMBOL ==== */
.tg-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 6px;
    padding: 8px 12px;
    transition: all 0.3s ease;
    text-decoration: none;
    cursor: pointer;
}

/* Tombol hanya ikon */
.icon-btn {
    width: 36px;
    height: 36px;
    font-size: 15px;
}

/* Tombol silver (Lihat) */
.silver-btn {
    background-color: silver;
    color: #000;
}
.silver-btn:hover {
    background-color: #a9a9a9;
    color: #fff;
}
.silver-btn:hover i {
    color: #fff;
}

/* Tombol merah (Hapus) */
.red-btn {
    background-color: #dc3545;
    color: #fff;
}
.red-btn:hover {
    background-color: #b30017;
    color: #fff;
}
.red-btn:hover i {
    color: #fff;
}

/* Efek hover halus */
.icon-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
}

/* ==== PERBAIKAN TATA LETAK ==== */
.main-area {
    width: 100%;
    margin: 0;
    padding: 0;
}

.cart__area {
    width: 100%;
    margin-top: 0;
}

.table {
    margin-bottom: 0;
}
</style>
