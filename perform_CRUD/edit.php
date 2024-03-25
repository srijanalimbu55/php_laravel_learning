<?php
require 'connect.php';
//echo "{$_POST['fn']}";
$editQuery = "UPDATE contacts
SET first_name = '{$_POST['fn']}', middle_name = '{$_POST['mn']}', last_name = '{$_POST['ln']}', phone_number = '{$_POST['phn']}'
WHERE ID = '{$_POST['i']}'";
mysqli_query($conn,$editQuery);
header('Location: /');
// echo "edited";
?>