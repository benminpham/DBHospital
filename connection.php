
<?php
// PHP page used to connect to the DB server
$dbServername = '127.0.0.1:3307';
$dbUsername = "root";
$dbPassword = "";
$dbName = "csv_db 6";
//Name of the DB that user created
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connect failed: %s\n". $conn -> error);
//Connection statement used to connect, name $conn for connection variable
?>