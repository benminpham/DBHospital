<?php
include_once('connection.php');

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$ssn   = $_POST['ssn'];

$sql = "UPDATE patients SET currentlyAdmitted = 'False' WHERE fName = '$fName' AND lName = '$lName' AND patient_id = 
    (SELECT patient_id FROM patient_info WHERE ssn = '$ssn');";

$sql2 = "SELECT lastDept FROM patients WHERE fName = '$fName' AND lName = '$lName' AND patient_id = (SELECT patient_id FROM patient_info 
    WHERE ssn = '$ssn');";

//Store the value of something into result and put into row and find the column you want it from and put it in the bracket
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
//echo "Result: " . $row['lastDept'];


if ($conn ->query($sql) === TRUE && $conn ->query($sql2) === TRUE){
}else{
        //echo "ERROR: ".$sql."<br>".$conn->error;
}

if($row['lastDept'] == "Intensive Care"){
    $sql3 = "DELETE FROM `intensive_care` WHERE patient_id = (SELECT patient_id FROM patient_info WHERE ssn = '$ssn');";
}elseif ($row['lastDept'] == "Emergency"){
    $sql3 = "DELETE FROM `emergency` WHERE patient_id = (SELECT patient_id FROM patient_info WHERE ssn = '$ssn');";
}elseif ($row['lastDept'] == "Inpatient"){
    $sql3 = "DELETE FROM `inpatient` WHERE patient_id = (SELECT patient_id FROM patient_info WHERE ssn = '$ssn');";
}elseif ($row['lastDept'] == "General Surgery"){
    $sql3 = "DELETE FROM `gen_surgery` WHERE patient_id = (SELECT patient_id FROM patient_info WHERE ssn = '$ssn');";
}else {};

if ($conn ->query($sql3) === TRUE){
}else{
       // echo "ERROR: ".$sql."<br>".$conn->error;
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
<h1 style = "text-align: center">Patient has been discharged and removed from Department!</h1> 
    <div style="text-align:center">  
        <form action="homepageEm.html">
            <input type="submit" value="Home" />
        </form>
        <br>
    </div>
</body>
</html>