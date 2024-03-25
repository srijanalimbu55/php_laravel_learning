<?php
require "./connect.php";
$sqlFetch = 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracker</title>
</head>
<body>
    <form action="add.php" method="post">   
        <h1 >Add new</h1>
        
        <label for="Entry Type">Entry Type:</label>
        <select name="" id="">
            <option value="expense">expense</option>
        </select> <br> <br>

        <label for="name">Name</label>
        <input type="text" name="name"> <br> <br>

        <label for="amount">amount</label>
        <input type="number" name="name">

        <br> <br>
        <button type="submit">Add expense</button>
    </form>
</body>
</html>