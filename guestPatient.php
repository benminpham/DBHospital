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
    <h1>Guest Patient Page</h1>
    <div style="text-align:center">  
        <form action="index.html">
            <input type="submit" value="Home" />
        </form>
        <br>
    </div>
    <table style="border: 1px solid; width: 60%">
        <tr>
            <th>Patient ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php
            $sql = "SELECT * FROM patients";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['patient_id'] .'</td>';
                    echo '<td>'. $row['fName'] .'</td>';
                    echo '<td>'. $row['lName'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
</body>
</html>