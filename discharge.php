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
</style>
<!DOCTYPE html>
<style>
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
<html>
    <title>Inpatient</title>
<body>
    <h1 style = "text-align: center;">Discharge Patient</h1>
    <div style="text-align:center">  
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <br>
  </div>
  <div id = "textbox">
        <form action="discharged.php" method = "POST">
            <label for="fName">First name:</label><br>
            <input type="text" id="fName" name="fName" required><br><br>

            <label for="lName">Last name:</label><br>
            <input type="text" id="lName" name="lName" required><br><br>
            
            <label for="ssn">SSN (xxxxxxxxx):</label><br>
            <input type="text" id="ssn" name="ssn" required><br><br>
    
            <input type="submit" value="Submit">
    
        </form>
    </div>
</body>
</html>