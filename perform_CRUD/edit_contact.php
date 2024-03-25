<?php
require 'connect.php';
$id = $_POST['id'];
$first = $_POST['first'];
$mid = $_POST['mid'];
$last = $_POST['last'];
$number = $_POST['number'];
//header('Location: /');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit the data</h1>
    <?php
    echo "<form action='edit.php' method='post'>
    <input type='hidden' name='i' value='{$id}'>
    <input type='text' name='fn' value='{$first}'>
    <input type='text' name='mn' value='{$mid}'>
    <input type='text' name='ln' value='{$last}'>
    <input type='text' name='phn' value='{$number}'>
    <button type=submit>Edit</button>
    </form>";
    ?>
</body>
</html>