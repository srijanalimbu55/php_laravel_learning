<?php
    require 'connect.php';


    echo "{$_POST['url']}";

    if(isset($_POST['url'])){
        $shortUrl = "generated_localhost";
        $longUrl = $_POST['url'];
        echo "$shortUrl";
        $insert = "insert into url(long_url, short_url) values ('$longUrl', '$shortUrl')";
        $run = mysqli_query($conn, $insert);
       // Header('Location: /');
    }
?>