
<?php
include_once "./includes/connect2.php";

mysqli_query($conn,"INSERT INTO inventory(id, name, weight, length, width, depth) VALUES 
 (\"".$_POST["id"]."\", \"".$_POST['name']."\",\"".$_POST["weight"]."\", \"".$_POST["length"]."\", \"".$_POST["width"]."\", \"".$_POST["depth"]."\");");

// mysqli_query($conn,"INSERT INTO inventory(id, name, weight, length, width, depth) VALUES (1890,'jonsfdfnmy',12,14,99,66);");
// mysqli_query($conn,$TEST);

$fetch = mysqli_query($conn,"SELECT * FROM inventory"); 
include "./templates/header.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ADD NEW Product page</title>
</head>
<body>
<section>
    <h3 class="app_title">Welcome to the BFG-3000 Inventory Controller</h3>
</section>
 
 <!-- <form onsubmit="ajaxCall()" class="form_container" action="./includes/add_new2.php" "> -->
 <form method="post" action="add_new2.php">  
<div class="inputs">

        <input type="text" id="id" name="id" placeholder="id">
        <br>
        <input type="text" id="name" name="name" placeholder="Product Name">
        <br>
        <input type="text" id="weight"name="weight" placeholder="Weight ?/kgs">
        <br>
        <input type="text" id="length" name="length" placeholder="Length ?/cm">
        <br>
        <input type="text" id="width" name="width" placeholder="Width ?/cm">
        <br>
        <input type="text" id="depth" name="depth" placeholder="Depth ?/cm">
        <br>
        <br>
        <button class="add_new"  type="submit" name="submit">Add New Product</button>
        <br>
        <button id="retrieve" type="submit" name="retrieve">Get current list</button>
        <br>
        <a href="fetch_all2.php">this works</a>
</div>
 </form>
 <?php
echo $_POST["id"];
echo $_POST["name"];
echo $_POST["weight"];
echo $_POST["length"];
echo $_POST["width"];
echo $_POST["depth"];

?>

 <script src="main.js"></script>
 <?php
// **************************
//  $TEST = "INSERT INTO inventory(id, name, weight, length, width, depth) VALUES 
//  (\"".$_POST["name"]."\", \"".$_POST["weight"]."\", \"".$_POST["length"]."\", \"".$_POST["width"]."\", \"".$_POST["depth"]."\");";
// **************************
// mysqli_query($conn,$TEST);
//  echo $TEST;
// *************************

//  $TEST=mysqli_query($conn,"INSERT INTO inventory(id, name, weight, length, width, depth) VALUES (1890,'john',12,14,99,66);");

// echo $TEST;
 
 ?>
<?php

// $TEST = "INSERT INTO inventory(id, name, weight, length, width, depth) VALUES 
//  (\"".$_POST["name"]."\", \"".$_POST["weight"]."\", \"".$_POST["length"]."\", \"".$_POST["width"]."\", \"".$_POST["depth"]."\");";
//  echo $TEST;



//  mysqli_query($conn,$TEST);

// $TEST = "INSERT INTO inventory(id, name, weight, length, width, depth) VALUES 
// (\"".$_POST["name"]."\" ,);";
// echo $TEST;





//  mysqli_query($conn,"INSERT INTO inventory(id, name, weight, length, width, depth) VALUES (1234,"john",12,14,99,66);");



?>
  <?php 
  include "./templates/footer.php";
 ?>