<!DOCTYPE html>
<?php
  $con = mysqli_connect("localhost", "root", "", "spms");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php
    $barchartdata = "";
    $count = 0;
    $sum = 0;
    $gpa = 0;
    $cgpa = 0;
    $sql_id= "SELECT * FROM `student`";
    $sql_semester= "SELECT * FROM `semester`";
    $sql_school= "SELECT * FROM `school`";
    $sql_vc= "SELECT * FROM `vc`";

    // $fire_vc = mysqli_query($con, $sql_vc);
    // while ($result_vc = mysqli_fetch_array($fire_vc)) {
    $vc_id = 2;
        // $vc_jd = '"'.$result_vc['JoinDate'].'"';
        // $vc_ld = '"'.$result_vc['LeaveDate'].'"';



    $barchartdata .="[ 'M.Omar Rahman' ,";
    $fire_school = mysqli_query($con, $sql_school);
    while ($result_school = mysqli_fetch_array($fire_school)) {
        $SchoolName = '"'.$result_school['SchoolName'].'"';
        $fire_id = mysqli_query($con, $sql_id);
        while ($result_id = mysqli_fetch_array($fire_id)) {
            $StudentID = $result_id['StudentID'];
            $sql = '
            SELECT 
                student.Name,student.StudentID, (evaluation.Obtainedmarks / assessment.Marks)*100 AS FinalMark , semester.SemesterName
            FROM
                evaluation
            INNER JOIN
                assessment ON assessment.AssessmentID = evaluation.AssessmentID
            INNER JOIN
                student ON student.StudentID = assessment.StudentID
            INNER JOIN
                section ON section.SectionID = assessment.SectionID
            INNER JOIN
                semester ON semester.SemesterID = section.SemesterID
            INNER JOIN 
                department ON department.DepartmentID = student.DepartmentID
            INNER JOIN 
                school ON school.SchoolID = department.SchoolID
            INNER JOIN 
                vc ON vc.VcID = school.VcID
            WHERE student.StudentID = '.$StudentID." AND school.SchoolName = ".$SchoolName."AND vc.VcID = ".$vc_id;

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
                    $count ++;
                    $sum += $GradePoint;
                    echo $StudentID."<br>";
                    echo $SchoolName."<br>";
                    echo $vc_id."<br>";
                }
                $gpa = $sum/$rows;
                $cgpa += $gpa;
                $sum = 0;
                $gpa = 0;

            } 
        }
        
        if($cgpa!=0){
            $barchartdata .= $cgpa.",";
            $cgpa = 0;
        }
    }
    $barchartdata .="],";
    echo $count;
    echo $barchartdata;
  ?> 
</body>
</html>



