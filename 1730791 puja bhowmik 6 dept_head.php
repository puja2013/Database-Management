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
	
</head>
<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>SPMS</h2>
            <ul>
                <li><a href="dept_head.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="dept_report_head.php"><i class="fas fa-project-diagram"></i>Dept. Head Report</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i>Course Report</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Log Out</a></li>
            </ul> 
            
        </div>
    </div>
    <h1 style="margin-left: 300px; margin-top:10px;">Department Head</h1>

    </div>
       <div id="piechart" style="width: 900px; height: 500px; margin-left: 250px">
    </div>

<div class="graph">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	
	
	
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['students', 'Department'],
        <?php
        // $sql = "SELECT table_cgpa.cgpa FROM table_cgpa INNER JOIN student ON student.StudentID = table_cgpa.StudentID";
        $sql = "SELECT * FROM contribution";
        $fire = mysqli_query($con, $sql);

        while ($result = mysqli_fetch_assoc($fire)) {
          echo "['" . $result['student'] . "'," . $result['contribution'] . "],";
        }

        ?>
      ]);

      var options = {
        title: 'Department wise student: '
      };

      var chart = new google.visualization.BarChart(document.getElementById('piechart'));

      chart.draw(data, options);
	  
    }
  </script>
  </div>


</body>

</html>




