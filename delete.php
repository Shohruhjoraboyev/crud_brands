<?php
require_once('connect.php');

$id=$_GET['id'];
$query=mysqli_query($connect,"DELETE FROM `brands` WHERE `brands`.`Id` = '$id'");
header("Location: /crud_brands/");
?>
