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
if (isset($_GET["caseId"]))
{
$sql = "INSERT INTO covidcases(caseId, weekCase, caseNum, deathNum, regionId) VALUES (' ".$_GET["caseId"]." ', '".$_GET["weekCase"]." ',' ".$_GET["caseNum"]." ',' ".$_GET["deathNum"]." ',' ".$_GET["regionId"]." ')";

if (mysqli_query($conn, $sql)) {
    echo "Record Entered";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
