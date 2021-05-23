<!DOCTYPE html>
<html>

<head>
     <link rel="stylesheet" href="stylesheet.css">
     <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

     <style> 
         input[type=text], select {
         width: 30%;
         padding: 12px 20px;
         margin: 180px 0px 0px 530px;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 4px;    
         box-sizing: border-box;
        }


         input[type=submit] {
         width: 120px;
         background-color: rgb(128, 20, 217);
         color: white;
         padding: 14px 20px;
         margin: 20px 0px 0px 680px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         }  

         h3{
             margin: 10px 0px 0px 300px;
             font-size: 22px;
         }
     </style>
</head>

<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>SPMS</h2>
        <ul>
            <li><a href="instructor.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></li>
           
        </ul> 
        
    </div>
    
</div>

<h3>Student PLO achievement</h3>

     <form name="register" action="Instructorview-studentreport.php" method="post">
           <input type="text" name="first"   placeholder="Enter Student ID"/>
           <input type="submit" name="submit" value="Submit" />
     </form>
</body>


</html>