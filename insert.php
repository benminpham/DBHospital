<?php
include_once('connection.php');

//Get values from HTML form names
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$department = $_POST['department'];
$ssn = $_POST['ssn'];
$addr = $_POST['addr'];
$phone = $_POST['phone'];
$insurance = $_POST['insurance'];
$randnum = rand(100000000, 99999999999);
$randnum1 =rand(0,8000);


//echo $fname."<br>".$lname."<br>".$dob."<br>".$sex."<br>".$department."<br>".$ssn."<br>".$addr."<br>".$phone."<br>";
//Check if input was taken in from html form

$sql = "INSERT INTO patients (patient_id, currentlyAdmitted, dob, fName, lName, sex, lastDept)
values ((SELECT MAX(patient_id)+1 FROM patient_info), 'True', '$dob', '$fname', '$lname', '$sex', '$department')";
//Select the foreign key from other table and increase by 1 to give new ID to patient

//Update second table
$sql2 = "INSERT INTO patient_info (patient_id, dob, ssn, addr, phone)
values ((SELECT MAX(patient_id) FROM patients),'$dob', '$ssn', '$addr', '$phone')";
//Select the new ID number previously given to patients table and put into this current table

$sql3 = "INSERT INTO billing (recip_id, invoice_num, insurance, balance)
values ('$ssn','$randnum', '$insurance', '$randnum1')";
;

if (($conn ->query($sql) === TRUE) AND ($conn ->query($sql2) === TRUE) AND ($conn ->query($sql3) === TRUE)){
   // echo "ADDED:" ."True". "$dob". "$fname". "$lname". "$sex". "$department";
}else{
       // echo "ERROR: ".$sql."<br>".$conn->error;
    }
?>

<!DOCTYPE HTML>
<style>
    body{
        background-color: lightblue;
    }
    #textbox{
    text-align: center;
    border: black solid 1px;
    width: 30%;
    margin-left: auto;
    margin-right: auto;
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: lightgreen;
}
</style>
<head></head>
<body>  
    <h1 style = "text-align: center;">Patient Added</h1>
    <!--If Else statement from PHP to only show what medication the patient should pick depending on their department -->
    <?php if ($department == "Emergency"): ?>
    <div id = "textbox">
        <form action="insertEmergency.php" method = "POST">
            <label for="med">Medication:</label><br>
                <select name="med" id="med">
                <option value="Adenosine">Adenosine</option>
                <option value="Morphine">Morphine</option>
                <option value="Dopamine">Dopamine</option>
                <option value="Epinephrine">Epinephrine</option>
                <option value="Lorazepam">Lorazepam</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">    
        </form>
    </div>
<?php elseif ($department == "Inpatient"): ?>
    <div id = "textbox">
        <form action="insertInpatient.php" method = "POST">
            <label for="med">Medication:</label><br>
                <select name="med" id="med">
                <option value="Levothyroxine">Levothyroxine</option>
                <option value="Metformin">Metformin</option>
                <option value="Atorvastatin">Atorvastatin</option>
                <option value="Simvastatin">Simvastatin</option>
                <option value="Omeprazole">Omeprazole</option>
                <option value="Lisinopril">Lisinopril</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">    
        </form>
    </div>
<?php elseif ($department == "Intensive Care"): ?>
    <div id = "textbox">
        <form action="insertIC.php" method = "POST">
            <label for="med">Medication:</label><br>
                <select name="med" id="med">
                <option value="Tramadol">Tramadol</option>
                <option value="Codeine">Codeine</option>
                <option value="Oxycodone">Oxycodone</option>
                <option value="Haloperidol">Haloperidol</option>
                <option value="Warfarin">Warfarin</option>
                <option value="Diazepam">Diazepam</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">    
        </form>
    </div>
  <?php elseif ($department == "General Surgery"): ?>
    <div id = "textbox">
        <form action="insertGS.php" method = "POST">
            <label for="med">Surgery:</label><br>
                <select name="med" id="med">
                <option value="Appendectomy">Appendectomy</option>
                <option value="Cholecystectomy">Cholecystectomy</option>
                <option value="Tonsillectomy">Tonsillectomy</option>
                <option value="Colectomy">Colectomy</option>
                <option value="Hysteroscopy">Hysteroscopy</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">    
        </form>
    </div>
    <?php endif; ?>
</body>
</html>