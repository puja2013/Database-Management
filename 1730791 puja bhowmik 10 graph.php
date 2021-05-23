<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'spms');

    $mysqli= new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	$query= sprintf("
	
    SELECT co.CourseID, co.CoNo, plo.PloNO,(PLO/TotalCoMark * 100) AS PLOpercentage 

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
    ORDER BY coursewisePLO.PloID");
			  
	
    $result = $mysqli->query($query);
     
    $data = array();
    foreach ($result as $row) {
		//$data[] = $row;
        echo $value;
	}

    $result->close();
    
    $mysqli->close();

    //print json_encode($data);	
			  
	


    

?>