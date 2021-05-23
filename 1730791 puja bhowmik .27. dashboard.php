<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "spms");

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid flex-column-reverse">
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link fw-bold fs-5" href="#">School Wise</a>
        <a class="nav-link fw-bold fs-5" href="#">Department Wise</a>
        <a class="nav-link fw-bold fs-5" href="#">Program Wise</a>
      </div>
    </div>
  </div>
</nav>
</div>
<div class="wrapper">
    <div class="sidebar">
        <h2>SPMS</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="gpa_reg.php"><i class="fas fa-address-card"></i>GPA Input</a></li>
            <li><a href="reg.php"><i class="fas fa-address-card"></i>CGPA Input</a></li>
            <li><a href="dept_report.php"><i class="fas fa-address-card"></i>Dept Report</a></li>
            <li><a href="dept_report_head.php"><i class="fas fa-project-diagram"></i>Dept. Head Report</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Course Report</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Log Out</a></li>
        </ul> 
        
    </div>
    
</div>
       <div id="piechart" style="width: 900px; height: 500px; margin-left: 250px">
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>




