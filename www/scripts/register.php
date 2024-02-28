<?php 
    require('connection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $r_login = $_POST['r_login'];
        $r_pass = $_POST['r_pass'];
        $r_pass_repeat = $_POST['r_pass_repeat'];

        if ($r_pass == $r_pass_repeat){
            $check_query = "SELECT * FROM users WHERE login='$r_login'";
            $check_result = mysqli_query($connection, $check_query);
            
            if(mysqli_num_rows($check_result) > 0){
                echo "Пользователь с таким логином уже существует"; 
            }
            else{
                $sql = "INSERT INTO users (login, password) VALUES ('$r_login', '$r_pass')";
                if (mysqli_query($connection, $sql)){
                    echo "Пользователь успешно зарегистрирован";
                }
                else{
                    echo "Ошибка: " + mysqli_error($connection);
                }
            }
        }
        else {
            echo "Пароли не совпадают";
        }
    }
?>