<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'foods';
$conn = mysqli_connect($hostname, $username, $password, $database_name);

var_dump($conn);

$sql = "select * from momos";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
var_dump($rows);
echo "</pre>";


?>
