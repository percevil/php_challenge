<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "inventory";

$conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
 
if($conn === !true){
    die("ERROR: Could not connect to server!" 
    .$conn -> connect_error);
     $conn -> close();
}
