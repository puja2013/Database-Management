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
    array('PLO 01', $output[0][3], 'N/A', 'N/A','N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
    array('PLO 02', $output[1][3], 'N/A', 'N/A', $output[2][3], 'N/A', 'N/A', 'N/A', 'N/A', $output[3][3]),
    array('PLO 03', $output[4][3], 'N/A', 'N/A', $output[5][3], 'N/A', 'N/A', $output[6][3], 'N/A', $output[7][3]),
    array('PLO 04', $output[8][3], 'N/A', 'N/A', $output[9][3], 'N/A', 'N/A', $output[10][3], 'N/A', $output[11][3]),
    array('PLO 05', 'N/A', $output[12][3], 'N/A', $output[13][3], 'N/A', 'N/A', $output[14][3], 'N/A', 'N/A'),
    array('PLO 06', 'N/A', $output[15][3], 'N/A', 'N/A', $output[16][3], 'N/A', $output[17][3], 'N/A', $output[18][3]),
    array('PLO 07', 'N/A', $output[19][3], 'N/A', 'N/A', $output[20][3], 'N/A', 'N/A', $output[21][3], 'N/A'),
    array('PLO 08', 'N/A', $output[22][3], 'N/A', 'N/A', $output[23][3], $output[24][3], 'N/A', $output[25][3], 'N/A'),
    array('PLO 09', 'N/A', 'N/A', $output[26][3], 'N/A', $output[27][3], 'N/A', 'N/A', $output[28][3], 'N/A'),
    array('PLO 10', 'N/A', 'N/A', $output[29][3], 'N/A', 'N/A', $output[30][3], 'N/A', $output[31][3], 'N/A'),
    array('PLO 11', 'N/A', 'N/A', $output[32][3], 'N/A', 'N/A', $output[33][3], 'N/A', 'N/A', 'N/A'),
    array('PLO 12', 'N/A', 'N/A', $output[34][3], 'N/A', 'N/A', $output[35][3], 'N/A', 'N/A', 'N/A'),
); 

?>


<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'PLO NO');
        data.addColumn('string', 'CSE 101');
        data.addColumn('string', 'CSE 104');
        data.addColumn('string', 'CSE 201');
        data.addColumn('string', 'CSE 203');
        data.addColumn('string', 'CSE 204');
        data.addColumn('string', 'CSE 210');
        data.addColumn('string', 'CSE 211');
        data.addColumn('string', 'CSE 213');
        data.addColumn('string', 'CSE 303');
        data.addRows(
            <?php echo json_encode($table);?>
        );

        var table = new google.visualization.Table(document.getElementById('table_div'));

        

        table.draw(data, {showRowNumber: true, width: '60%', height: '60%'});
      }
    </script>
  </head>
  <body>
    <div id="table_div" style="margin-left: 200px;"></div>
    
  </body>
</html>