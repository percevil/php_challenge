<?php
// INVENTORY ADD TO DB
include_once 'connect2.php';

$name= $_POST['name'];
$weight = $_POST['weight'];
$length = $_POST['length'];
$width = $_POST['width'];
$depth = $_POST['depth'];

$mysqli = "INSERT INTO list(list_name, list_weight, list_length, list_width, list-depth ) VALUES ('$name','$weight','$length', '$width', '$depth');";
mysqli_query($con, $mysqli);

header("Location:../index.php?signup=item_recorded");



