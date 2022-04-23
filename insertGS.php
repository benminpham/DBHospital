<?php
include_once('connection.php');

$med = $_POST['med'];
$date = date('Y-m-d');

$sql = "INSERT INTO gen_surgery (date_admin, patient_id, surgeryType)
values ('$date', (SELECT MAX(patient_id) FROM patients), '$med')";
//Select the foreign key from other table and increase by 1 to give new ID to patient

if ($conn ->query($sql) === TRUE){
}else{
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
<h1 style = "text-align: center">Patient has been admitted to General Surgery!</h1> 

    <div style="text-align:center">  
        <form action="homepageEm.html">
            <input type="submit" value="Home" />
        </form>
        <br>
    </div>
</body>
</html>