<?php
require_once('connect.php');

$id=$_GET['id'];
$brand=mysqli_query($connect, "SELECT*FROM brands where brands.id='$id'");
$brand=mysqli_fetch_all($brand);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
<h2>Updating a new row</h2>
    <form name="create" action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="text" name="name" value="<?=$brand[0][1]?>" required>
        <textarea name="description"  cols="30" rows="8"  required><?=$brand[0][2]?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>