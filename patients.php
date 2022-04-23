<?php
include_once('connection.php');
?>
<style>
table, th, td {
  border: 1px solid;
  text-align: center;
}
body{
    background-color: lightblue;
}
table{
  margin-left: auto;
  margin-right: auto;
}
h1{
    text-align: center;
}
</style>
<!DOCTYPE html>
<html>
    <title>Patient Page</title>
<body>
    <h1>Total Patient Page</h1>
    <div style="text-align:center">  
    <form action="emergency.php">
      <input type="submit" value="Emergency" />
    </form>
    
    <form action="gen_surgery.php">
      <input type="submit" value="Surgery" />
    </form>
    
    <form action="inpatient.php">
      <input type="submit" value="Inpatient" />
    </form>
    <form action="intensive_care.php">
      <input type="submit" value="Intensive Care" />
    </form>
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <br>
    <br>
  </div>
<table style="border: 1px solid; width: 60%">
        <tr>
            <th>Patient ID</th>
            <th>Currently Admitted</th>
            <th>DOB</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Sex</th>
            <th>Last Department</th>
        </tr>
        <?php
            $sql = "SELECT * FROM patients";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['patient_id'] .'</td>';
                    echo '<td>'. $row['currentlyAdmitted'] .'</td>';
                    echo '<td>'. $row['dob'] .'</td>';
                    echo '<td>'. $row['fName'] .'</td>';
                    echo '<td>'. $row['lName'] .'</td>';
                    echo '<td>'. $row['sex'] .'</td>';
                    echo '<td>'. $row['lastDept'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
</body>
</html>