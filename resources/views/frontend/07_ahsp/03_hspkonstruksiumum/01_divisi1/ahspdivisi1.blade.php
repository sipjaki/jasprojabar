@include('frontend.00_approve.01_cssterpisah.header')

<body>
    {{-- @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1') --}}

    <div class="page-wrapper">
        {{-- <section class="page-banner">
            <div class="container">
                <div class="page-banner-title">
                    <h3 style="color: black; font-size:30px;">{{$title}}</h3>
                </div>
            </div>
        </section> --}}

        <section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
            <div class="container" style="margin-top:-50px;" style="background: white; max-width: 95%; margin: 30px auto; padding: 20px; border-radius: 20px; box-shadow: 0px 4px 10px rgba(14, 112, 1, 0.1);">
                <div class="row">

                    <div class="col-lg-12">
                        <button onclick="window.history.back()"
                        style="margin-top: 20px; padding: 15px 40px; width: 175px; height: 60px; font-size: 16px;
                               background-color: black; color: white; border: none; border-radius: 10px;
                               cursor: pointer; transition: 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='black'; this.style.color='white';">
                        ❌ Tutup
                    </button>
                            <br><br><br>
                            <h4>Analisa Harga Satuan Pekerjaan</h4>
                    <hr>
                    <h4 style="font-family: 'Poppins', sans-serif;">
                        Kode AHSP :
                        {{ optional($data->hspdivisi)->id }}.
                        {{ optional($data->hsppaket)->id }}.
                        {{ optional($data->hspkodepekerjaan)->kodepekerjaan }}.
                        {{$data->kode}}
                    </h4>
                    <hr>

                    <h4 style="font-family: 'Poppins', sans-serif;">
                        Jenis Pekerjaan :
                        {{$data->jenispekerjaan}}
                    </h4>
                    <hr>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead style="background-color: #0bb928; color: white;">
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Uraian</th>
                                        <th style="text-align: center;">Kode</th>
                                        <th style="text-align: center;">Satuan</th>
                                        <th style="text-align: center;">Koefisien</th>
                                        <th style="text-align: center;">Harga Satuan (Rp)</th>
                                        <th style="text-align: center;">Jumlah Harga (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td style="text-align: center;">A</td><td style="text-align: center;" >Tenaga Kerja</td><td></td><td></td><td></td><td></td><td></td></tr>

                                    @foreach ($databahan as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->uraian}}</td>
                                        <td style="text-align: center;">{{$item->kode}}</td>
                                        <td style="text-align: center;">{{$item->satuan}}</td>
                                        <td style="text-align: center;">{{$item->koefisien}}</td>
                                        <td class="text-end">{{$item->hargasatuan}}</td>
                                        <td class="text-end">{{$item->jumlah_pagu}}</td>
                                    </tr>

                                    @endforeach
                                    {{-- <tr><td></td><td>Tukang batu/tembok</td><td>L.02</td><td>OH</td><td>0.200</td><td>106.000</td><td>21.200</td></tr>
                                    <tr><td></td><td>Kepala Tukang</td><td>L.03</td><td>OH</td><td>0.040</td><td>122.000</td><td>4.880</td></tr>
                                    <tr><td></td><td>Mandor</td><td>L.04</td><td>OH</td><td>0.013</td><td>133.000</td><td>1.729</td></tr> --}}
                                    <tr><td colspan="6" class="text-end"><strong>Jumlah Harga Tenaga Kerja</strong></td><td class="text-end"><strong>106.609</strong></td></tr>


                                    <tr><td style="text-align: center;">B</td><td style="text-align: center;">Bahan</td><td></td><td></td><td></td><td></td><td></td></tr>

                                    <tr>

                                        <td></td>
                                        <td>Kaso 5/7 kayu kelas II (Perancah)</td>
                                        <td></td>
                                        <td style="text-align: center;">m3</td>
                                        <td style="text-align: center;">0.039</td>
                                        <td class="text-end">1.976.000</td>
                                        <td class="text-end">76.471,20</td></tr>

                                    {{-- <tr><td></td><td>Papan Kayu ukuran 2/20 cm</td><td></td><td>m3</td><td>0.040</td><td>1.976.000</td><td>78.249,60</td></tr>
                                    <tr><td></td><td>Paku 5 inci</td><td></td><td>kg</td><td>0.587</td><td>16.400</td><td>9.630,08</td></tr>
                                    <tr><td></td><td>Semen Portland</td><td></td><td>kg</td><td>26.406</td><td>1.450</td><td>38.288,70</td></tr>
                                    <tr><td></td><td>Pasir Beton</td><td></td><td>kg</td><td>61.560</td><td>221</td><td>13.604,76</td></tr>
                                    <tr><td></td><td>Kerikil (Maks 30mm)</td><td></td><td>kg</td><td>83.349</td><td>244</td><td>20.337,16</td></tr>
                                    <tr><td></td><td>Air</td><td></td><td>liter</td><td>17.415</td><td>50</td><td>870,75</td></tr>
                                    <tr><td></td><td>Residu</td><td></td><td>liter</td><td>0.400</td><td>5.400</td><td>2.160,00</td></tr> --}}
                                    <tr class="text-end"><td colspan="6" class="text-end"><strong>Jumlah Harga Bahan</strong></td><td class="text-end"><strong>239.612,25</strong></td></tr>


                                    <tr><td style="text-align: center;">C</td><td style="text-align: center;">Peralatan</td><td></td><td></td><td></td><td></td><td></td></tr>

                                    <td></td>
                                    <td>Kaso 5/7 kayu kelas II (Perancah)</td>
                                    <td></td>
                                    <td style="text-align: center;">m3</td>
                                    <td style="text-align: center;">0.039</td>
                                    <td class="text-end">1.976.000</td>
                                    <td class="text-end">76.471,20</td></tr>

                                    <tr class="text-end"><td colspan="6" class="text-end"><strong>Jumlah Harga Alat</strong></td><td></td></tr>
                                    <tr><td style="text-align: center;">D</td><td colspan="5" class="text-end">Jumlah Harga Tenaga Kerja, Bahan dan Peralatan (A+B+C)</td><td class="text-end">346.221,25</td></tr>
                                    <tr><td style="text-align: center;">E</td><td colspan="5" class="text-end">Biaya Umum dan Keuntungan (10%)</td><td class="text-end">34.622,12</td></tr>
                                    <tr><td style="text-align: center;">F</td><td colspan="5" class="text-end"><strong>Harga Satuan Pekerjaan (D+E)</strong></td><td class="text-end"><strong>380.843,37</strong></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- @include('frontend.00_approve.01_cssterpisah.footer1') --}}
    {{-- @include('frontend.00_approve.01_cssterpisah.footer') --}}


@include('frontend.00_approve.01_cssterpisah.footer2')
