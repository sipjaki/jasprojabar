<style>
/* Membuat halaman penuh dan menengahkan kontennya */
/* Membuat halaman penuh dan menengahkan kontennya */
.page-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
    padding: 0; /* Hilangkan padding agar lebar penuh */
}

/* Container utama agar lebar penuh */
.container {
    background: white;
    width: 100%;
    max-width: 800vw; /* Maksimum selebar viewport */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    display: grid;
    grid-template-columns: repeat(12, 1fr); /* Grid 12 kolom */
    gap: 10px;
}

/* Wadah tabel agar tidak ada margin kosong */
.table-container {
    grid-column: span 12;
    overflow-x: auto; /* Supaya bisa di-scroll di layar kecil */
    display: flex;
    justify-content: center;
    width: 100%; /* Lebarkan sepenuhnya */
}

/* Tabel agar penuh di layar */
table {
    width: 100%; /* Penuh sesuai viewport */
    max-width: 100vw; /* Tidak melebihi layar */
    border-collapse: collapse;
    border: 2px solid #2ECC71;
}

th, td {
    border: 1px solid #2ECC71;
    padding: 12px;
    text-align: left;
    font-size: 16px;
}

/* Header tabel */
th {
    background-color: #2ECC71;
    color: white;
    font-weight: bold;
}

/* Warna baris selang-seling */
tbody tr:nth-child(even) {
    background-color: #eaf1ed;
}

tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

/* RESPONSIVE DESIGN */

/* Tablet (Lebar < 1024px) */
@media (max-width: 1024px) {
    .container {
        grid-template-columns: repeat(6, 1fr);
    }
    .table-container {
        grid-column: span 6;
    }
}

/* Mobile (Lebar < 768px) */
@media (max-width: 768px) {
    .container {
        grid-template-columns: repeat(1, 1fr);
    }
    .table-container {
        grid-column: span 1;
    }
    table {
        width: 100%; /* Penuh di layar kecil */
    }
}

</style>

@include('frontend.00_approve.01_cssterpisah.header')

<body>
    <div class="page-wrapper">
        <section class="news-details-section">
            <div class="container"  style="
            background: white;
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            height: auto;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Uraian</th>
                                <th>Kode</th>
                                <th>Satuan</th>
                                <th>Koefisien</th>
                                <th>Harga Satuan (Rp)</th>
                                <th>Jumlah Harga (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>A</td><td>Tenaga Kerja</td><td></td><td></td><td></td><td></td><td></td></tr>
                            <tr><td></td><td>Tukang Kayu</td><td>L.02</td><td>OH</td><td>0.200</td><td>106.000</td><td>21.200</td></tr>
                            <tr><td></td><td>Tukang Batu</td><td>L.02</td><td>OH</td><td>0.200</td><td>106.000</td><td>21.200</td></tr>
                            <tr><td></td><td>Kepala Tukang</td><td>L.03</td><td>OH</td><td>0.040</td><td>122.000</td><td>4.880</td></tr>
                            <tr><td></td><td>Mandor</td><td>L.04</td><td>OH</td><td>0.013</td><td>133.000</td><td>1.729</td></tr>
                            <tr><td colspan="6" style="text-align: right;"><strong>Jumlah Harga Tenaga Kerja</strong></td><td><strong>106.609</strong></td></tr>
                            <tr><td>B</td><td>Bahan</td><td></td><td></td><td></td><td></td><td></td></tr>
                            <tr><td></td><td>Kaso 5/7 kayu kelas II</td><td></td><td>m3</td><td>0.039</td><td>1.976.000</td><td>76.471,20</td></tr>
                            <tr><td></td><td>Papan Kayu 2/20 cm</td><td></td><td>m3</td><td>0.040</td><td>1.976.000</td><td>78.249,60</td></tr>
                            <tr><td colspan="6" style="text-align: right;"><strong>Jumlah Harga Bahan</strong></td><td><strong>239.612,25</strong></td></tr>
                            <tr><td>D</td><td colspan="5" style="text-align: right;"><strong>Total Harga (A+B+C)</strong></td><td><strong>346.221,25</strong></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
