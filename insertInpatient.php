<?php
include_once('connection.php');

$med = $_POST['med'];
$date = date('Y-m-d');

$sql = "INSERT INTO inpatient (patient_id, date_admin, medications)
values ((SELECT MAX(patient_id) FROM patients),'$date', '$med')";
//Select the foreign key from other table and increase by 1 to give new ID to patient

if ($conn ->query($sql) === TRUE){
    //echo "ADDED:" ."$date". "$med";
}else{
        //echo "ERROR: ".$sql."<br>".$conn->error;
    }

?>
<!DOCTYPE html>
<head>
<style>
    body{
        background-color: lightblue;
    }
</style>
</head>
<body>    
    
    <div style="text-align:center">  
    <h1 style = "text-align: center">Patient has been admitted as an Inpatient!</h1> 

        <form action="homepageEm.html">
            <input type="submit" value="Home" />
        </form>
        <br>
    </div>
</body>
</html>