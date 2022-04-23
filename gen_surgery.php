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
    <title>General Surgery</title>
<body>
    <h1 style = "text-align: center;">General Surgery Department Patients</h1>
    <div style="text-align:center">  
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <form action="patients.php">
      <input type="submit" value="Patient Page" />
    </form>
    <br>
  </div>
    <table style="border: 1px solid; width: 60%">
        <tr>
            <th>Patient ID</th>
            <th>Date Administered</th>
            <th>Surgery</th>
        </tr>
        <?php
            $sql = "SELECT * FROM gen_surgery";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['patient_id'] .'</td>';
                    echo '<td>'. $row['date_admin'] .'</td>';
                    echo '<td>'. $row['surgeryType'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
</body>
</html>