<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawCharts);

      function drawCharts() {
          drawJenjangChart();
          drawJabatanKerjaChart();
      }

      function drawJenjangChart() {
          var data = google.visualization.arrayToDataTable([
              ['Jenjang', 'Jumlah'],
              @foreach($statistikJenjang as $item)
                  ['{{ $item['jenjang'] }}', {{ $item['jumlah'] }}],
              @endforeach
          ]);

          var options = {
              title: 'Distribusi Jenjang',
              is3D: true,
          };

          var chart = new google.visualization.PieChart(document.getElementById('chart_jenjang'));
          chart.draw(data, options);
      }

      function drawJabatanKerjaChart() {
          var data = google.visualization.arrayToDataTable([
              ['Jabatan Kerja', 'Jumlah'],
              @foreach($statistikJabatanKerja as $item)
                  ['{{ $item['jabatan_kerja'] }}', {{ $item['jumlah'] }}],
              @endforeach
          ]);

          var options = {
              title: 'Distribusi Jabatan Kerja',
              is3D: true,
          };

          var chart = new google.visualization.PieChart(document.getElementById('chart_jabatan_kerja'));
          chart.draw(data, options);
      }
    </script>
</head>
<body>

    <h2>Statistik SKK Tenaga Ahli Konstruksi</h2>

    <div id="chart_jenjang" style="width: 600px; height: 400px;"></div>
    <div id="chart_jabatan_kerja" style="width: 600px; height: 400px;"></div>

</body>
</html>
