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
    <title>Sample</title>
<body>
  <h1 style = "text-align: center;">Patient's Bill</h1>
  <div style="text-align:center">  
    <form action="homepageEm.html">
      <input type="submit" value="Home" />
    </form>
    <br>
  </div>
  <table style="border: 1px solid; width: 60%">
        <tr>
            <th>Reciept ID</th>
            <th>Invoice Num</th>
            <th>Insurance</th>
            <th>Balance ($)</th>
        </tr>
        <?php
            $sql = "SELECT * FROM billing";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['recip_id'] .'</td>';
                    echo '<td>'. $row['invoice_num'] .'</td>';
                    echo '<td>'. $row['insurance'] .'</td>';
                    echo '<td>'. $row['balance'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
</body>
</html>