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
if (isset($_GET["aId"]))
{
$sql = "INSERT INTO covidage(aId,aWeek,zeroToFour,fiveToEleven,twelveToFifteen,sixteenToSeventeen,eighteenToTwentyNine,thirtyToThirtynine,fortyToFortyNine,fiftyToSixtyFour,sixtyFiveToSeventyFour,seventyFivePlus)
VALUES (' ".$_GET["aId"]." ', '".$_GET["aWeek"]." ',' ".$_GET["zeroToFour"]." ',' ".$_GET["fiveToEleven"]." ',' ".$_GET["twelveToFifteen"]." ',' ".$_GET["sixteenToSeventeen"]." ',' ".$_GET["eighteenToTwentyNine"]." ',' ".$_GET["thirtyToThirtyNine"]." ',' ".$_GET["fortyToFortyNine"]." ',' ".$_GET["fiftyToSixtyFour"]." ',' ".$_GET["sixtyFivetoSeventyFour"]." ',' ".$_GET["seventyFivePlus"]." ')";

if (mysqli_query($conn, $sql)) {
    echo "Record Entered!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
