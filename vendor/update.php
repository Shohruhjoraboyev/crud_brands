<?php
require_once('../connect.php');
print_r($_POST);
$id=$_POST['id'];
$name=$_POST['name'];
$description=$_POST['description'];

$query=mysqli_query($connect,"UPDATE `brands` SET `Name` = '$name', `Description` = '$description' WHERE `brands`.`Id` = '$id'");

header("Location: /crud_brands/");
?>
