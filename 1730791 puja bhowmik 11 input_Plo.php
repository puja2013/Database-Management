<!DOCTYPE html>
<html>

<head>
    <title>Student PLO & CO</title>
</head>

<body>
    <?php

    $studentName = $_POST['studentName'];
    $studentID = $_POST['studentId'];
    $courseName = $_POST['courseName'];
    $courseID = $_POST['courseId'];
    $section = $_POST['sectionNumber'];
    $ploID = $_POST['coursePloId'];
    $semester = $_POST['semestername'];
    $year = $_POST['year'];


    echo 'Student Name: ' . $studentName . '</br>';
    echo 'Student Id: ' . $studentID . '</br>' ;
    echo 'Course Name: ' . $courseName . '</br>' ;
    echo 'Course ID: ' . $courseID . '</br>' ;
    echo 'Section: ' . $section . '</br>' ;
    echo 'Plo ID: ' . $ploID . '</br>' ;
    echo 'Semester: ' . $semester . '</br>' ;
    echo 'Year: ' . $year . '</br>' . '</br>' ;


    ?>

</body>

</html>