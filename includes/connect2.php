<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "inventory";

$conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);




echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";echo "<br>";

 
if($conn === !true){
    die("ERROR: Could not connect to server!" 
    .$conn -> connect_error);
     $conn -> close();
}
