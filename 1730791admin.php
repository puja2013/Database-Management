<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "spms");

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<div class="graph">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	
	
	
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['students', 'contribution'],
        <?php
        $sql = "SELECT * FROM contribution";
        $fire = mysqli_query($con, $sql);
        while ($result = mysqli_fetch_assoc($fire)) {
          echo "['" . $result['student'] . "'," . $result['contribution'] . "],";
        }

        ?>
      ]);

      var options = {
        title: 'Department wise student Enrollment: '
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
	  
    }
  </script>
  </div>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>SPMS</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Student Report</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Course Report</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Log Out</a></li>
        </ul> 
        
    </div>
    
</div>
       <div id="piechart" style="width: 900px; height: 500px; margin-left: 250px"></div>
</body>

</html>




