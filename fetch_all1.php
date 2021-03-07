✅ WORKS
<?php
include_once "./includes/connect1.php";
$fetch = mysqli_query($conn,"SELECT * FROM list;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bernice's Employee list</title>
</head>
<body>
    <?php
    $x=0;
    if(mysqli_num_rows($fetch) > 0){
    ?>
    <table>
        <tr>
            <td>Employee ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td>Email</td>
            <td>City</td>
            <td>Postal Code</td>
            <td>Move in date</td>
            <td>Province</td>  
        </tr>
    </table>
        <?php
        while($row = mysqli_fetch_array($fetch)){
        ?>
        
    <table>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['first'];?></td>
            <td><?php echo $row['last'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['postal'];?></td>
            <td><?php echo $row['movein'];?></td>
            <td><?php echo $row['province'];?></td>
        </tr>
        <?php $x++;}
        ?>
    </table>
    <?php
    }
    else{
    echo "No employees found!";
    }
?>
</body>
</html>
