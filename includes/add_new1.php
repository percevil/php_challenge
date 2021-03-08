<?php
// BERNICE LIST ADD TO DB 
include_once 'connect1.php';

$employee_id= $_POST['employee_id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$mysqli = "INSERT INTO employee_table (employee_table_employee_id, employee_table_firstName, employee_table_lastName, employee_table_email) VALUES ('$employee_id','$firstName','$lastName', '$email');";
mysqli_query($con, $mysqli);
header("Location:../index.php?item_recorded");






