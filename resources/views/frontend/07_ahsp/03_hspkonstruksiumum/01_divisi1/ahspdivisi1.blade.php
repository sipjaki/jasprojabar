<style>
    /* Membuat halaman penuh dan menengahkan kontennya */
    .page-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Supaya kontennya ada di tengah secara vertikal */
        background-color: #f4f4f4; /* Warna latar belakang agar lebih nyaman dilihat */
        padding: 20px;
    }

    .container {
        background: white;
        width: 95%;
        max-width: 1250px;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .table-container {
        width: 100%;
        overflow-x: auto; /* Supaya bisa di-scroll di layar kecil */
        display: flex;
        justify-content: center;
    }

    table {
        width: 85%; /* Ukuran tabel 85% dari layar */
        border-collapse: collapse;
        border: 2px solid #2ECC71; /* Warna hitam kehijauan */
    }

    th, td {
        border: 1px solid #2ECC71;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #2ECC71;
        color: white;
        font-weight: bold;
    }

    /* Warna selang-seling */
    tbody tr:nth-child(even) {
        background-color: #eaf1ed; /* Warna lebih soft */
    }

    tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    /* Responsif: Jika layar kecil, atur agar tabel bisa di-scroll */
    @media (max-width: 768px) {
        .container {
            width: 100%;
            padding: 15px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%; /* Agar mengikuti lebar container */
        }
    }
</style>

@include('frontend.00_approve.01_cssterpisah.header')

<body>
    <div class="page-wrapper">
        <section class="news-details-section">
            <div class="container">
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
