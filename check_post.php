<?php
    //print_r($_POST); //вывод глобального массива методом пост

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if(trim($name) == "") {
        echo 'вы не ввели имя пользователя';
    }
    else if(strlen(trim($name)) <= 1) {
        echo 'такого имени не существует';
    }
    else if(trim($email) == "" || trim($password) == "" || trim($_POST['message']) == "") {
        echo 'введите данные';
    }
    else {
//        $_POST['password'] = md5($password); //хэширование пароля
//        echo "все данные";
//        foreach ($_POST as $key => $value) {
//            echo "<p>$value</p>";
//        }

        header('Location: /about.php'); //переадресация пользователя
        exit;//код, который следует после этого оператора выполняться не будет
    }
