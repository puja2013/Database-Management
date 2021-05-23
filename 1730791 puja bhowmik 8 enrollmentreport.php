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
        'packages': ['bar']
      });
      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'nStd'],
          <?php
          $sql = "SELECT count(student.studentId) as nStd,program_enrollment.enrollmentYear, semester.semesterId, program.programId, program.programName
          from student
          inner join program_enrollment on student.studentId=program_enrollment.studentId
          inner join program on program_enrollment.programId=program.programId
          inner join semester on program_enrollment.semesterId=semester.semesterId
          where program_enrollment.enrollmentYear in ('2016','2017') and program.programId in ('1','2')
          group by program.programId,program_enrollment.enrollmentYear";

          // $fire = mysqli_query($con, $sql);
          // $year  = array();
          // $nStudent  = array();
          // $programName = array();
          // $programId = array();

          // while ($result = mysqli_fetch_assoc($fire)) {
          //   array_push($year,$result['enrollmentYear']);
          //   array_push($nStudent,$result['nStd']);
          //   array_push($programName,$result['programName']);

          //   // echo "['" . $result['enrollmentYear'] . "'," . $result['nStd'] . "],";
          // }


          //   for($i=0; $i<count($year); $i++){
          //     pi(
          //   }

          // $fire = mysqli_query($con, $sql);
          // while ($result = mysqli_fetch_assoc($fire)) {
          //   echo "['" . $result['enrollmentYear'] . "'," . $result['nStd'] . "],";
          // }


          $fire = mysqli_query($con, $sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo "['" . $result['enrollmentYear'] . "'," . $result['nStd'] . "],";
          }


          ?>
        ]);

        var options = {
          bars: 'horizontal',
          title: 'Department wise student Enrollment: ',
        };

        var chart = new google.charts.Bar(document.getElementById('piechart'));

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
        <li><a href="admin.php"><i class="fa fa-arrow-left"></i> Back</li>

    </div>

  </div>
  <div id="piechart" style="width: 900px; height: 500px; margin-left: 250px"></div>
</body>

</html>