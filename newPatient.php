<?php
include_once('connection.php');
?>
<style>
table, th, td {
  border: 1px solid;
  text-align: center;
}
table{
  margin-left: auto;
  margin-right: auto;
}
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
<!DOCTYPE html>
<html>
    <title>Registration</title>
<body>
    <h1 style = "text-align: center;">Registration</h1>
    <div style="text-align:center">  
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <br>
  </div>
    <div id = "textbox">
        <form action="insert.php" method = "POST">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" required><br><br>

            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required><br><br>

            <label for="dob">Date of Birth(yyyy-mm-dd):</label><br>
            <input type="text" id="dob" name="dob" required><br><br>

            <label for="sex">Sex:</label>
            <select name="sex" id="sex">
            <option value="female">Female</option>
            <option value="male">Male</option>
            </select><br><br>

            <label for="department">Department:</label><br>
            <select name="department" id="department">
            <option value="Intensive Care">Intensive Care</option>
            <option value="Emergency">Emergency</option>
            <option value="General Surgery">General Surgery</option>
            <option value="Inpatient">Inpatient</option>
            </select>
            <br><br>
            
            <label for="ssn">SSN (xxxxxxxxx):</label><br>
            <input type="text" id="ssn" name="ssn" required><br><br>

            <label for="insurance">Insurance:</label><br>
            <input type="text" id="insurance" name="insurance"><br><br>

            <label for="addr">Address:</label><br>
            <input type="text" id="addr" name="addr" required><br><br>

            <label for="phone">Phone((123) 123-1234):</label><br>
            <input type="text" id="phone" name="phone" required><br><br>
    
            <input type="submit" value="Submit">
    
        </form>
    </div>
</body>
</html>