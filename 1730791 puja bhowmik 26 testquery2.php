<!DOCTYPE html>
<?php
  $con = mysqli_connect("localhost", "root", "", "spms");
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
</head>
<body>
<div id="barchart_material" style="width: auto; height: 500px;"></div>

    <div>
    <?php
        $barchartdata = "";
        $count = 0;
        $sum = 0;
        $gpa = 0;
        $cgpa = 0;
        $sql_id= "SELECT * FROM `student`";
        $sql_semester= "SELECT * FROM `semester`";

        // SELECT 
        // student.Name,student.StudentID, (evaluation.Obtainedmarks / assessment.Marks)*100 AS FinalMark , semester.SemesterName
        //     FROM
        //         evaluation
        //     INNER JOIN
        //         assessment ON assessment.AssessmentNo = evaluation.AssessmentID
        //     INNER JOIN
        //         student ON student.StudentID = evaluation.StudentID
        //     INNER JOIN
        //         section ON section.SectionID = assessment.SectionID
        //     INNER JOIN
        //         semester ON semester.SemesterID = section.SemesterID
        //     INNER JOIN 
        //         department ON department.DepartmentID = student.DepartmentID
        //     WHERE semester.SemesterName = 'Spring' AND department.DepartmentID = 2
        $sql_program= "SELECT * FROM `program`";

        $fire_semester = mysqli_query($con, $sql_semester);
        while ($result_semester = mysqli_fetch_array($fire_semester)) {
          $SemesterName = '"'.$result_semester['SemesterName'].'"';
    
          $barchartdata .="[".$SemesterName.",";
          $fire_program = mysqli_query($con, $sql_program);
          while ($result_program = mysqli_fetch_array($fire_program)) {
            $ProgramName = '"'.$result_program['ProgramName'].'"';
    
            $fire_id = mysqli_query($con, $sql_id);
            while ($result_id = mysqli_fetch_array($fire_id)) {
              $StudentID = $result_id['StudentID'];
              $sql = '
              SELECT 
                  student.Name,student.StudentID, (evaluation.Obtainedmarks / assessment.Marks)*100 AS FinalMark , semester.SemesterName
              FROM
                  evaluation
              INNER JOIN
                  assessment ON assessment.AssessmentNo = evaluation.AssessmentID
              INNER JOIN
                  student ON student.StudentID = evaluation.StudentID
              INNER JOIN
                  section ON section.SectionID = assessment.SectionID
              INNER JOIN
                  semester ON semester.SemesterID = section.SemesterID
                  INNER JOIN
                  program_enrollment ON program_enrollment.StudentID = student.StudentID
              INNER JOIN
                  program ON program.ProgramID = program_enrollment.ProgramID
              WHERE semester.SemesterName = '.$SemesterName." AND student.StudentID = ".$StudentID." AND program.ProgramName = ".$ProgramName;
    
                    $fire = mysqli_query($con, $sql);
                    $rows = mysqli_num_rows($fire);
                    if($rows == 0){

                    }
                    else{
                        while ($result = mysqli_fetch_assoc($fire)) {
                            $GradePoint = 0;
                            $Grade = '';
                            if($result['FinalMark'] >= 85 &&  $result['FinalMark'] <= 100){
                                $GradePoint = 4.0;
                                $Grade =  "A";
                            }
                            elseif($result['FinalMark'] >= 80 &&  $result['FinalMark'] <= 85){
                                $GradePoint = 3.7;
                                $Grade = "A-";
                            }
                            elseif($result['FinalMark'] >= 75 &&  $result['FinalMark'] <= 80){
                                $GradePoint = 3.3;
                                $Grade = "B+";
                            }
                            elseif($result['FinalMark'] >= 70 &&  $result['FinalMark'] <= 75){
                                $GradePoint = 3.0;
                                $Grade = "B";
                            }
                            elseif($result['FinalMark'] >= 65 &&  $result['FinalMark'] <= 70){
                                $GradePoint = 2.7;
                                $Grade = "B-";
                            }
                            elseif($result['FinalMark'] >= 60 &&  $result['FinalMark'] <= 65){
                                $GradePoint = 2.3;
                                $Grade = "C+";
                            }
                            elseif($result['FinalMark'] >= 55 &&  $result['FinalMark'] <= 60){
                                $GradePoint = 2.0;
                                $Grade = "C";
                            }
                            elseif($result['FinalMark'] >= 50 &&  $result['FinalMark'] <= 55){
                                $GradePoint = 1.7;
                                $Grade = "C-";
                            }
                            elseif($result['FinalMark'] >= 45 &&  $result['FinalMark'] <= 50){
                                $GradePoint = 1.3;
                                $Grade = "D+";
                            }
                            elseif($result['FinalMark'] >= 40 &&  $result['FinalMark'] <= 45){
                                $GradePoint = 1.0;
                                $Grade = "D";
                            }
                            elseif($result['FinalMark'] >= 0 &&  $result['FinalMark'] <= 40){
                                $GradePoint = 0.0;
                                $Grade = "F";
                            }
                            $sum += $GradePoint;
                            echo "[" . $result['Name'] . "," . $result['StudentID'] . "," . $result['FinalMark'] . "," . $Grade . "," . $GradePoint . "," . $result['SemesterName'] . "],";
                            $StudentName = $result['Name'];
                            echo"<br>";
                        }
                        echo"<br>";
                        $gpa = $sum/$rows;
                        echo 'Grade of '.$StudentName.' is '. $gpa.'<br>';
                        $cgpa += $gpa;
                        $sum = 0;
                        $gpa = 0;
                        echo"<br>";

                    } 
                }
                // $cgpa= $cgpa*100;
                    $barchartdata .= $cgpa.",";
                    echo 'Total CGPA of '.$ProgramName.' is '.$cgpa.'<br>';
                    $cgpa = 0;
                    echo"<br>";
                    echo"<br>";
                    echo"<br>";
                    echo"<br>";

            }
            $barchartdata .="], ";
        }
        echo $barchartdata
    ?> 

  </div>
  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Semester', 'Computer Science and Engineering', 'Electrical and Electronic Engineering', 'Environmental Science','Finance','Marketing'],
        <?php
          echo $barchartdata;
        ?>
      ]);
    var options = {
      chart: {
        title: 'Department wise Student Peerformence',
        // subtitle: 'Sales, Expenses, and Profit: 2014-2017',
      },
    //   bars: 'horizontal' // Required for Material Bar Charts.
      bars: 'vertical' // Required for Material Bar Charts.
    };
    var chart = new google.charts.Bar(document.getElementById('barchart_material'));
    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
</body>
</html>


<!-- 

$sql_school= "SELECT * FROM `school`";

$fire_school = mysqli_query($con, $sql_school);
while ($result_school = mysqli_fetch_array($fire_school)) {
  $SchoolName = '"'.$result_school['SchoolName'].'"'; -->