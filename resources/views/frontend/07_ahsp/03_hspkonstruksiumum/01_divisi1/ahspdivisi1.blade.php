<style>
    .btn-show-popup {
        padding: 10px 20px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .popup-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }

    .popup-box {
        background: white;
        padding: 20px;
        border-radius: 8px;
        width: 80%;
        max-width: 800px;
        transform: scale(0.8);
        transition: transform 0.3s ease-in-out;
    }

    .popup-container:target {
        opacity: 1;
        visibility: visible;
    }

    .popup-container:target .popup-box {
        transform: scale(1);
    }

    .popup-close {
        display: block;
        text-align: right;
        font-size: 20px;
        font-weight: bold;
        text-decoration: none;
        color: red;
    }

    .btn-close-popup {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        text-decoration: none;
    }

    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: white;
    }
</style>

@include('frontend.00_approve.01_cssterpisah.header')

<body>
    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
        <section class="page-banner">
            <div class="container">
                <div class="page-banner-title">
                    <h3 style="color: black; font-size:30px;">{{$title}}</h3>
                </div>
            </div>
        </section>

        <section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
            <div class="container" style="background: white; max-width: 95%; margin: 30px auto; padding: 20px; height: auto; border-radius: 20px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); position: relative; z-index: 10;">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="popupAnalisa" class="popup-container">
                            <div class="popup-box">
                                <a href="#" class="popup-close">&times;</a>
                                <h2>Analisa Harga Satuan Pekerjaan</h2>
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
                                            <tr><td>D</td><td colspan="5" style="text-align: right;">Total Harga (A+B+C)</td><td>346.221,25</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="btn-close-popup">Tutup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('frontend.00_approve.01_cssterpisah.footer1')
    @include('frontend.00_approve.01_cssterpisah.footer')
</body>
