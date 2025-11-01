@include('frontend.00_fiturmenu.01_header')
@include('frontend.00_fiturmenu.07_style')
<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div class="tg-header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tg-header__top-info">
                            <ul class="list-wrap">
<li style="overflow:hidden; white-space:nowrap; box-sizing:border-box;">
    {{-- <i class="flaticon-placeholder"></i> --}}
    <span style="
        display:inline-block;
        padding-left:100%;
        animation: runText 15s linear infinite;
    ">
        Hai {{ auth()->user()->name }}! Yuk, catat dan kelola keuanganmu bareng Rekapinaja biar makin tenang!
    </span>
    <style>
        @keyframes runText {
            0%   { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }
    </style>
</li>

                                {{-- <li><i class="flaticon-envelope"></i><a href="mailto:info@gmail.com">info@gmail.com</a></li> --}}
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="col-lg-5">
                        <div class="tg-header__top-right">
                            <ul class="list-wrap">
                                <li><i class="flaticon-telephone"></i><a href="tel:0123456789">+123 4884 4889</a></li>
                                <li>
                                    <div class="tg-header__top-social">
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://x.com/home" target="_blank"><img src="assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.pinterest.com/" target="_blank"><img src="assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        @include('frontend.00_fiturmenu.04_menunavigasi')
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->

    </header>
    <!-- header-area-end -->
<style>
/* ===== STYLE TOOLBAR ===== */
.transaction__toolbar {
  margin-top: 20px;
  padding: 18px;
  border-radius: 10px;
  background: #f9fafb;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.transaction__toolbar .form-control {
  padding: 8px 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
}

.tg-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 8px 16px;
  border-radius: 6px;
  border: none;
  font-weight: 600;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  cursor: pointer;
  transition: all 0.3s ease;
}

.tg-btn:hover {
  background-color: #0069d9;
  color: #fff;
  transform: translateY(-1px);
}

/* Variasi tombol */
.tg-btn.red-btn { background-color: #dc3545; }
.tg-btn.red-btn:hover { background-color: #b30017; }

.tg-btn.green-btn { background-color: #198754; }
.tg-btn.green-btn:hover { background-color: #0f5132; }

/* RESPONSIVE */
@media (max-width: 768px) {
  .toolbar-row {
    flex-direction: column !important;
    align-items: stretch !important;
    gap: 10px;
  }
}

/* ===== STYLE TABEL ===== */
.table-responsive {
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  border-radius: 8px;
  margin-top: 20px;
}

.cart__table th,
.cart__table td {
  white-space: nowrap;
}

.icon-btn {
  width: 36px;
  height: 36px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 6px;
  font-size: 15px;
}

/* ===== PAGINATION ===== */
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 25px;
  gap: 5px;
}

.pagination a,
.pagination span {
  padding: 8px 14px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: bold;
  background-color: #007bff;
  color: #fff;
  transition: all 0.3s ease;
}

.pagination a:hover {
  background-color: #0056b3;
}
</style>

<section class="transaction__toolbar">
  <div class="container">
    <!-- Row 1 -->
    <div class="toolbar-row" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">

      <!-- Filter tanggal -->
<!-- Filter Tanggal -->
<div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap; margin-bottom: 15px;">
  <input type="date" id="tanggalAwal" class="form-control" style="width: auto; min-width: 150px;">
  <span style="font-weight: 600;">s/d</span>
  <input type="date" id="tanggalAkhir" class="form-control" style="width: auto; min-width: 150px;">
  <button type="button" class="tg-btn" onclick="filterTanggal()">Cari</button>
  <button type="button" class="tg-btn red-btn" onclick="resetFilter()">Reset</button>
</div>
<script>
  // Map bulan Bahasa Indonesia (tambahan: handle lowercase / variasi spasi)
  const bulanMap = {
    'januari': 0, 'februari': 1, 'maret': 2, 'april': 3, 'mei': 4, 'juni': 5,
    'juli': 6, 'agustus': 7, 'september': 8, 'oktober': 9, 'november': 10, 'desember': 11,
    // English fallback just in case
    'january': 0, 'february': 1, 'march': 2, 'april': 3, 'may': 4, 'june': 5,
    'july': 6, 'august': 7, 'september': 8, 'october': 9, 'november': 10, 'december': 11
  };

  function cleanText(s) {
    if (!s) return '';
    return s.replace(/\u00A0/g, ' ') // non-breaking space -> normal
            .replace(/\s+/g, ' ')
            .trim();
  }

  // Robust parser: supports "01 November 2025", "1 November 2025", "2025-11-01", "01/11/2025"
  function parseTanggal(text) {
    if (!text) return null;
    let t = cleanText(text);

    // 1) If ISO-like (YYYY-MM-DD) -> parse directly
    const isoMatch = t.match(/(\d{4})[-\/](\d{2})[-\/](\d{2})/);
    if (isoMatch) {
      const y = parseInt(isoMatch[1], 10);
      const m = parseInt(isoMatch[2], 10) - 1;
      const d = parseInt(isoMatch[3], 10);
      return new Date(y, m, d);
    }

    // 2) If dd/mm/yyyy or dd-mm-yyyy
    const dmyMatch = t.match(/(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})/);
    if (dmyMatch) {
      const d = parseInt(dmyMatch[1], 10);
      const m = parseInt(dmyMatch[2], 10) - 1;
      const y = parseInt(dmyMatch[3], 10);
      return new Date(y, m, d);
    }

    // 3) If "01 November 2025" or "1 November 2025" (with month name)
    const parts = t.split(' ');
    if (parts.length >= 3) {
      // take last 3 tokens to be safe (in case there's extra text)
      const last3 = parts.slice(-3);
      const dayStr = last3[0].replace(/\D/g,''); // remove non-digits
      const monthStr = last3[1].toLowerCase();
      const yearStr = last3[2].replace(/\D/g,'');
      const day = dayStr ? parseInt(dayStr, 10) : NaN;
      const year = yearStr ? parseInt(yearStr, 10) : NaN;
      const monthIdx = bulanMap[monthStr];
      if (!isNaN(day) && !isNaN(year) && typeof monthIdx !== 'undefined') {
        return new Date(year, monthIdx, day);
      }
    }

    // fallback: try Date.parse (may work for some locales)
    const parsed = new Date(t);
    if (!isNaN(parsed.getTime())) return parsed;

    return null; // gagal parse
  }

  // Filter tanggal: ambil teks dari kolom tanggal (td ke-2)
  function filterTanggal() {
    const awalVal = document.getElementById('tanggalAwal').value;
    const akhirVal = document.getElementById('tanggalAkhir').value;

    if (!awalVal || !akhirVal) {
      alert('Pilih tanggal awal dan akhir dulu bro 😎');
      return;
    }

    // normalisasi start/end ke jam 00:00:00 / 23:59:59 untuk inklusif
    const startDate = new Date(awalVal);
    startDate.setHours(0,0,0,0);
    const endDate = new Date(akhirVal);
    endDate.setHours(23,59,59,999);

    const rows = document.querySelectorAll(".cart__table tbody tr");
    let visibleCount = 0;

    rows.forEach(row => {
      // ambil teks dari kolom tanggal secara aman
      const tdTanggal = row.querySelector('td:nth-child(2)');
      if (!tdTanggal) {
        row.style.display = 'none';
        return;
      }
      const tanggalText = cleanText(tdTanggal.innerText || tdTanggal.textContent);
      const tanggal = parseTanggal(tanggalText);

      if (!tanggal) {
        // kalau tidak bisa parse, sembunyikan agar tidak keliru
        row.style.display = 'none';
        return;
      }

      // bandingkan
      if (tanggal >= startDate && tanggal <= endDate) {
        row.style.display = '';
        visibleCount++;
      } else {
        row.style.display = 'none';
      }
    });

    if (visibleCount === 0) {
      alert('⚠️ Tidak ada transaksi pada rentang tanggal tersebut.');
    }
  }

  function resetFilter() {
    document.getElementById('tanggalAwal').value = '';
    document.getElementById('tanggalAkhir').value = '';
    document.querySelectorAll('.cart__table tbody tr').forEach(r => r.style.display = '');
  }
</script>

      <!-- Tambah transaksi -->
      <div>
    <a href="{{ route('transaksi.create') }}" class="tg-btn">+ Tambah Transaksi</a>
</div>

    </div>

    <!-- Row 2 -->
    <div class="toolbar-row" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; margin-top: 15px; gap: 15px;">

      <!-- Dropdown jumlah data -->
      <div style="display: flex; align-items: center; gap: 8px;">
        <label for="perPage" style="font-weight: 600;">Tampilkan:</label>
        <select id="perPage" class="form-control" onchange="ubahJumlahData()" style="width: auto;">
          <option value="15">15</option>
          <option value="20">20</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="150">150</option>
          <option value="200">200</option>
          <option value="250">250</option>
          <option value="500">500</option>
          <option value="1000">1000</option>
        </select>
      </div>

      <!-- Tombol export -->
      <!-- Tombol Export -->
<div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
    <button class="tg-btn red-btn" onclick="exportPDF()">📄 Export PDF</button>
    <button class="tg-btn green-btn" onclick="exportExcel()">📊 Export Excel</button>
</div>

<!-- Script Export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.29/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
    // Fungsi ambil data dari tabel
    function getTableData() {
        const rows = document.querySelectorAll(".cart__table tbody tr");
        const data = [];

        rows.forEach(row => {
            const cells = row.querySelectorAll("td");
            if (cells.length >= 4) { // Pastikan bukan baris kosong
                data.push({
                    no: cells[0].innerText.trim(),
                    tanggal: cells[1].innerText.trim(),
                    jumlah: cells[2].innerText.trim(),
                    subtotal: cells[3].innerText.trim()
                });
            }
        });

        return data;
    }

    // Export PDF
    function exportPDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        const data = getTableData();
        if (data.length === 0) {
            alert("Tidak ada data transaksi untuk diexport!");
            return;
        }

        const tableData = data.map(item => [item.no, item.tanggal, item.jumlah, item.subtotal]);

        doc.setFontSize(16);
        doc.text("Laporan Transaksi", 14, 15);
        doc.setFontSize(11);
        doc.text("Tanggal Cetak: " + new Date().toLocaleDateString("id-ID"), 14, 23);

        doc.autoTable({
            head: [["No", "Tanggal Transaksi", "Jumlah Barang", "Sub Total"]],
            body: tableData,
            startY: 30,
            styles: { fontSize: 10, halign: "center" },
            headStyles: { fillColor: [40, 116, 240] }
        });

        doc.save("Laporan_Transaksi.pdf");
    }

    // Export Excel
    function exportExcel() {
        const data = getTableData();
        if (data.length === 0) {
            alert("Tidak ada data transaksi untuk diexport!");
            return;
        }

        // Buat worksheet dan workbook
        const ws = XLSX.utils.json_to_sheet(data);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Transaksi");

        // Simpan file
        XLSX.writeFile(wb, "Laporan_Transaksi.xlsx");
    }
</script>

    </div>
  </div>
</section>

<!-- main-area -->
<main class="main-area fix" style="min-height: calc(100vh - 200px); display: flex; flex-direction: column; justify-content: flex-start;">

    <!-- cart-area -->
    <div class="cart__area section-py-130" style="flex-grow: 1; padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Wrapper scroll -->
                    <div class="table-responsive" style="overflow-x: auto; white-space: nowrap; border-radius: 8px;">
                        <table class="table cart__table" style="min-width: 700px; margin-top: 0;">
                            <thead>
                                <tr>
                                    <th class="product__thumb text-center">No</th>
                                    <th class="product__name">Tanggal Transaksi</th>
                                    <th class="product__price">Jumlah Barang</th>
                                    <th class="product__subtotal">Sub Total</th>
                                    <th class="product__action text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($data as $item)
                                    <tr>
                                        <td class="product__thumb text-center">{{ $no++ }}</td>
                                        <td class="product__name">
                                            {{ \Carbon\Carbon::parse($item->tanggal_transaksi)->translatedFormat('d F Y') }}
                                        </td>
                                        <td class="product__price">{{ $item->jumlah_barang }}</td>
                                        <td class="product__subtotal">
                                            Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                                        </td>
                                        <td class="text-center">
                                            <!-- Tombol Lihat -->
                                            <a href="{{ route('transaksi.show', $item->id) }}"
                                               class="tg-btn silver-btn icon-btn me-2" style="color:white;"
                                               title="Lihat">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('transaksi.destroy', $item->id) }}"
                                                  method="POST"
                                                  style="display:inline-block;"
                                                  onsubmit="return confirm('Yakin ingin menghapus transaksi ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="tg-btn red-btn icon-btn" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">
                                            Belum Ada Transaksi
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.00_fiturmenu.08_pagination')
    <!-- cart-area-end -->
    <br><br>
</main>
    <!-- main-area-end -->


    <!-- footer-area-end -->

@include('frontend.00_fiturmenu.03_footer')
