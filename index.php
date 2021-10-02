<?php
require_once('connect.php');

$query=mysqli_query($connect,"SELECT*FROM brands");
$brands=mysqli_fetch_all($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Brands CRUD</title>
</head>
<body>
    <h2>Brands CRUD</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Updating</th>
            <th>Deleting</th>
        </tr>
        <?php
        foreach($brands as $brand){ ?>
            <tr>
            <td><?= $brand[0] ?></td>
            <td><?= $brand[1] ?></td>
            <td><?= $brand[2] ?></td>
            <td><a href="update.php?id=<?= $brand[0] ?>">Update</a></td>
            <td><a class="delete" href="delete.php?id=<?= $brand[0] ?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <h2>Creating a new row</h2>
    <form name="create" action="create.php" method="post">
        <input type="text" name="name" placeholder="Enter a name of a brand" required>
        <textarea name="description"  cols="30" rows="8" placeholder="Enter a description"></textarea>
        <button type="submit">Create</button>
    </form>
</body>
</html>