<?php
// INVENTORY CONNECT
// ❌❌❌❌❌❌❌❌❌❌ DO NOT CHANGE !!! ❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "inventory";

$conn = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
 
// Check connection
if($conn === !true){
    die("ERROR: Could not connect to server!" 
    .$conn -> connect_error);
     $conn -> close();
}
// ❌❌❌❌❌❌❌❌❌❌ DO NOT CHANGE !!! ❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌❌
