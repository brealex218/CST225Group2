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
if (isset($_GET["rId"]))
{
$sql = "INSERT INTO covidrace(rId, rWeek, amerIndianAlaskaNative, asianPacificIslander, black, hispanic, white) VALUES (' ".$_GET["rId"]." ', '".$_GET["rWeek"]." ',' ".$_GET["amerInidianAlaskaNative"]." ',' ".$_GET["asianPacificIslander"]." ',' ".$_GET["black"]." '.' ".$_GET["hispanic"]." '.' ".$_GET["white"]." ')";

if (mysqli_query($conn, $sql)) {
    echo "Record Entered";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
