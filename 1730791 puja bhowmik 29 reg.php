<?php
    $insert = false;

    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "spms";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $db);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
      // Collect post variables
      $id = $_POST['id'];
      $cgpa = $_POST['cgpa'];
      // $sql= "INSERT INTO `user_data`.`info` (`name`, `s_id`, `department`) VALUES ('$name', '$id', $dept')";
      $sql= "INSERT INTO `table_cgpa`(`StudentID`, `cgpa`) VALUES ('$id', '$cgpa')";


      // Execute the query
      if($con->query($sql) == true){
          $insert = true;
      }
      else{
          echo "ERROR: $sql <br> $con->error";
      }
    }


    $con->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Input</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<?php
        if($insert == true){ 
          echo "
          <div class='container my-3'>
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
          Saved your information!!!
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div></div>"; 
        }
  ?>

    <div class="container mt-2" style="color: #50525C;">
        <div class="card" style="background-color: #F2F2F2;">
            <div class="card-body">
                <form action="" method="post">
                    <legend>Students CGPA input section</legend>
                    <hr>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Select Student:</label>
                        <select id="example-getting-started" name="id">

                            <?php
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $db = "spms";
                        
                            // Create a database connection
                            $con = mysqli_connect($server, $username, $password, $db);
                        
                            // Check for connection success
                            if(!$con){
                                die("connection to this database failed due to" . mysqli_connect_error());
                            }


                            $sql = "SELECT * FROM student";
                            $result = $con-> query($sql);

                            while ($rows = $result-> fetch_assoc()){ 
                            ?>
                            <option value="<?php echo $rows['StudentID'];?>"><?php echo $rows['StudentID'];?></option>

                            <?php
                            } 
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Enter CGPA:</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="cgpa"
                            placeholder="Enter CGPA...">
                    </div>
                    <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>

