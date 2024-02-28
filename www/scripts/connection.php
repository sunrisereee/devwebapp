<?php 
    $host = 'localhost';
    $database = 'webapp1';
    $user = 'root';
    $password = '';

    $connection = mysqli_connect($host, $user, $password, $database);

    if (!$connection){
        die ("Connection failed: " + mysqli_connect_error());
    }
?>