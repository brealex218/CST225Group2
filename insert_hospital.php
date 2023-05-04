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
if (isset($_GET["hospId"]))
{
$sql = "INSERT INTO covidhospital(hospId, weekHospital, hospNum) VALUES (' ".$_GET["hospId"]." ', '".$_GET["weekHospital"]." ',' ".$_GET["hospNum"]." ')";

if (mysqli_query($conn, $sql)) {
    echo "Record Entered";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
