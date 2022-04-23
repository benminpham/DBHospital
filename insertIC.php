<?php
include_once('connection.php');

$med = $_POST['med'];
$date = date('Y-m-d');

$sql = "INSERT INTO intensive_care (date_admin, patient_id, medications)
values ('$date', (SELECT MAX(patient_id) FROM patients), '$med')";
//Select the foreign key from other table and increase by 1 to give new ID to patient

if ($conn ->query($sql) === TRUE){
    //echo "ADDED:" ."$date". "$med";
}else{
        //echo "ERROR: ".$sql."<br>".$conn->error;
    }

?>
<!DOCTYPE html>
<style>
    body{
        background-color: lightblue;
    }
</style>
<head></head>
<body>    
<h1 style = "text-align: center">Patient has been admitted to the ICU!</h1> 

    <div style="text-align:center">  
        <form action="homepageEm.html">
            <input type="submit" value="Home" />
        </form>
        <br>
    </div>
</body>
</html>