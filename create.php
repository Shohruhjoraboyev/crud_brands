<?php
require_once('connect.php');

$name=$_POST['name'];
$description=$_POST['description'];

$query=mysqli_query($connect,"INSERT INTO brands (name, description) VALUES ('$name', '$description')");

header("Location: /crud_brands/");

?>
