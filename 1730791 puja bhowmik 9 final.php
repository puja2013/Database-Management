<?php
    
	$dbhandle = new mysqli('localhost','root','','spms');
     
	$query = "SELECT * FROM contribution";
    $res = $dbhandle->query($query);	
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

       function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Genre', 'Fantasy & Sci Fi'],
         
        <?php
        $sql = "SELECT * FROM contribution";
        $fire = mysqli_query($con, $sql);
        $result = array('CSE203', 250);
          echo "['" . '$result[0]' . "'," . $result[1] . "],";
		  echo "['" . '$result[0]' . "'," . $result[1] . "],";
		  echo "['" . '$result[0]' . "'," . $result[1] . "],";
		  echo "['" . '$result[0]' . "'," . $result[1] . "],";
		  echo "['" . '$result[0]' . "'," . $result[1] . "],"
          

        ?>
        ]);

        var options = {
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

     
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px; margin-left:250px"></div>
  </body>
</html>

