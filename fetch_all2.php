<?php
include_once "./includes/connect2.php";

$fetch = mysqli_query($conn,"SELECT * FROM inventory 
(id, name, weight, length, width, depth) VALUES 
(\"".$_POST["id"]."\", \"".$_POST["name"]."\",\"".$_POST["weight"]."\", \"".$_POST["length"]."\", \"".$_GET["width"]."\", \"".$_GET["depth"]."\");");

// $fetch = mysqli_query($conn,"SELECT * FROM inventory;");




include "./templates/header.php";
?>
    <title>HI DI DI INVENTORY APP</title>
<body>



<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

Z

    <!-- <?php
    $x=0;
    if(mysqli_num_rows($fetch) > 0){
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Weight</td>
            <td>Length</td>
            <td>Width</td>
            <td>Depth</td>  
        </tr>
    </table>
        <?php
        while($row = mysqli_fetch_array($fetch)){
        ?>
        
    <table>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['weight'];?></td>
            <td><?php echo $row['length'];?></td>
            <td><?php echo $row['width'];?></td>
            <td><?php echo $row['depth'];?></td>
        </tr>
        <?php 
        $x++;}
        ?>
    </table>
    <?php
    }
    else{
    echo "No products found!";
    } 
?> -->

<?php include "./templates/footer.php";?>
