<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Kategori', 'Persentase'],
          @foreach($persentaseData as $id => $persentase)
            ['{{ $id }}', {{ $persentase }}],
          @endforeach
        ]);

        var options = {
          title: 'Persentase Data Tertib Jasa Konstruksi',
          is3D: true,
          slices: {
            0: { color: '#4285F4' },
            1: { color: '#34A853' },
            2: { color: '#FBBC05' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
