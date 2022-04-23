<?php
include_once('connection.php');
?>
<style>
table, th, td {
  border: 1px solid;
  text-align: center;
}
h1{
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
    <head>
    <title>Sample</title>
    </head>
<body>
    <h1>Patient Private Information</h1>
    <div style="text-align:center">  
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <br>
  </div>
<table style="border: 1px solid; width: 60%">
        <tr>
            <th>Patient ID</th>
            <th>Date Of Birth</th>
            <th>SSN</th>
            <th>Address</th>
            <th>Phone Number</th>

        </tr>
        <?php
            $sql = "SELECT * FROM patient_info";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['patient_id'] .'</td>';
                    echo '<td>'. $row['dob'] .'</td>';
                    echo '<td>'. $row['ssn'] .'</td>';
                    echo '<td>'. $row['addr'] .'</td>';
                    echo '<td>'. $row['phone'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
</body>
</html>