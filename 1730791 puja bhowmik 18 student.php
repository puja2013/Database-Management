<?php 
    
$conn = mysqli_connect("localhost", "root","","spms");

$sql = "SELECT co.CourseID, co.CoNo, plo.PloNO,(PLO/TotalCoMark * 100) AS PLOpercentage 

FROM co,plo, (
    
SELECT co.CourseID, co.CoNo, co.PloID, evaluation.Obtainedmarks AS PLO, 
assessment.Marks AS TotalCoMark 
       
FROM co,evaluation,assessment,plo,registration 
              
WHERE registration.StudentID='1722006'
AND registration.RegistrationID=evaluation.RegistrationID 
AND evaluation.AssessmentID=assessment.AssessmentNo 
AND assessment.CoID=co.CoID 
AND co.PloID=plo.PloNO
              
GROUP BY registration.SectionID, co.PloID) coursewisePLO 

WHERE co.CoNo=coursewisePLO.CoNo 
AND plo.PloNO=coursewisePLO.PloID 
AND co.CourseID=coursewisePLO.CourseID
ORDER BY coursewisePLO.PloID, coursewisePLO.CourseID";

$result = mysqli_query($conn, $sql);

$output = mysqli_fetch_all($result);

//echo "<pre>";
//print_r($output);
//echo "</pre>";

$table = array(
     array('Course-wise PLO', 'CSE 101', 'CSE 104', 'CSE 201', 'CSE 203', 'CSE 204', 'CSE 210', 'CSE 211', 'CSE 213', 'CSE 303', array('role' => 'annotation')),
     array('PLO 01', $output[0][3], null, null, null, null, null, null, null, null, ''),
     array('PLO 02', $output[1][3], null, null, $output[2][3], null, null, null, null, $output[3][3], ''),
     array('PLO 03', $output[4][3], null, null, $output[5][3], null, null, $output[6][3], null, $output[7][3], ''),
     array('PLO 04', $output[8][3], null, null, $output[9][3], null, null, $output[10][3], null, $output[11][3], ''),
     array('PLO 05', null, $output[12][3], null, $output[13][3], null, null, $output[14][3], null, null, ''),
     array('PLO 06', null, $output[15][3], null, null, $output[16][3], null, $output[17][3], null, $output[18][3], ''),
     array('PLO 07', null, $output[19][3], null, null, $output[20][3], null, null, $output[21][3], null, ''),
     array('PLO 08', null, $output[22][3], null, null, $output[23][3], $output[24][3], null, $output[25][3], null, ''),
     array('PLO 09', null, null, $output[26][3], null, $output[27][3], null, null, $output[28][3], null, ''),
     array('PLO 10', null, null, $output[29][3], null, null, $output[30][3], null, $output[31][3], null, ''),
     array('PLO 11', null, null, $output[32][3], null, null, $output[33][3], null, null, null, null),
     array('PLO 12', null, null, $output[34][3], null, null, $output[35][3], null, null, null, null),

); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

       function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo json_encode($table); ?>);

        var options = {
        width: 1000,
        height: 500,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
        title: 'Course-wise PLO achievement',


        series: {
            0: { color: '#200a52' },
            1: { color: '#1a94ff' },
            2: { color: '#f1ca3a' },
            3: { color: '#f40b0b' },
            4: { color: '#0bf4ba' },
            5: { color: '#ff0066' },
            6: { color: '#0b0bf4' },
            7: { color: '#00cc63' },
            8: { color: '#ae00ff' },
          }
      };

     
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</head>

<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>SPMS</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="1722006report.php"><i class="fas fa-address-card"></i>Report</a></li>
            <li><a href="login.php"><i class="fas fa-map-pin"></i>Log Out</a></li>
        </ul> 
        
    </div>
    
</div>

         <div id="columnchart_material" style="width: 20px; height: 1500px; margin-left: 255px;"></div>

</body>

</html>