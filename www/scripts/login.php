<?php 
    require('connection.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $l_login = $_POST['l_login'];
        $l_pass = $_POST['l_pass'];

        $sql = "SELECT * FROM users WHERE login='$l_login' AND password='$l_pass'";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) == 1){
            echo "Вход выполнен.";
        }
        else{
            echo "Неверный логин или пароль." + mysqli_num_rows($result);
        }
    }
?>