<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid_db";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
if (isset($_GET["gId"]))
{
$sql = "INSERT INTO covidhospital(gId,gWeek,male,female)
VALUES (' ".$_GET["gId"]." ', '".$_GET["gWeek"]." ',' ".$_GET["male"]." ',' ".$_GET["female"]." ')";

if (mysqli_query($conn, $sql)) {
    echo "Record Entered!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
