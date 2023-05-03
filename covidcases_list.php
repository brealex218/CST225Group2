<?php 
require 'db_connect.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid_db";  //any database you want to use
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// show all contact information
$sql="select * from covidCases";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<html>
<head>
<title>List</title>
</head>

<BODY>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote>
  <p>
  <h2>All  Customer  Information</h2>
   <?php
       if (mysqli_num_rows($result)==0){
      echo "<h4>No data<h4>"; 
    } else {
         while($row = mysqli_fetch_assoc($result)) {
        echo "" .$row["Case ID"]."\t".$row["Week of Case]."\t".$row["]."\t".$row["Number of Cases]."\t".$row["Number of Deaths]."<br>";
    }     
  ?>
  
</blockquote>
</body>
</html>
