
<?php
include_once "./includes/connect2.php";
$fetch = mysqli_query($conn,"SELECT * FROM inventory");
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
 
 <form class="form_container" action="./includes/add_new2.php" method="POST">
<div class="inputs">
        <input type="text" name="name" placeholder="Product Name">
        <br>
        <input type="text" name="weight" placeholder="Weight ?/kgs">
        <br>
        <input type="text" name="length" placeholder="Length ?/cm">
        <br>
        <input type="text" name="width" placeholder="Width ?/cm">
        <br>
        <input type="text" name="depth" placeholder="Depth ?/cm">
        <br>
        <br>
        <button class="add_new"  type="submit" name="submit">Add New Product</button>
        <br>
        <button class="retrieve"  type="submit" name="retrieve">Get current list</button>
</div>
 </form>

</body>
</html>