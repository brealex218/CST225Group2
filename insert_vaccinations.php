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
if (isset($_GET["vaccId"]))
{
    
$sql = "INSERT INTO covidvacc(vaccId, weekVacc, vaccNum) VALUES (' ".$_GET["vaccId"]." ', '".$_GET["weekVacc"]." ',' ".$_GET["vaccNum"]." ')";

if (mysqli_query($conn, $sql)) {
    echo "Vaccination Entered";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
