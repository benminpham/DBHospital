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
<html>
    <title>Registration</title>
<body>
    <h1 style = "text-align: center;">Registration</h1>
    <div style="text-align:center">  
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <form action="newPatient.php">
      <input type="submit" value="New Patient Registration" />
    </form>
    <form action="discharge.php">
      <input type="submit" value="Patient Discharge" />
      <!-- Remove Patient from currently admitted -->
    </form>
    <br>
  </div>
</body>
</html>