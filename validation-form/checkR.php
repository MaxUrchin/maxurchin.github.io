<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Неприпустима довжина логіну!";
        exit();
    }
    else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Неприпустима довжина ім'я!";
        exit();
    }
    else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        echo "Неприпустима довжина паролю!(від 7 до 32 символів)";
        exit();
    }

    $pass = md5($pass."oijfdgijo0693");

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");
    
    $mysql->close();

    header('Location: /Reg.php');
?>