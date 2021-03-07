
<?php
include_once "./includes/connect2.php";
$fetch = mysqli_query($conn,"SELECT * FROM inventory;");
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI DI DI INVENTORY APP</title>
</head>
<body>
    <?php
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
        <?php $x++;}
        ?>
    </table>
    <?php
    }
    else{
    echo "No products found!";
    }
?>
</body>
</html>
