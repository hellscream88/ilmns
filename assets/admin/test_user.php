<?php
session_start();

/*сохраняем введенное пользователем в форме login в переменную $login, если оно пустое, то уничтожаем переменную*/
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == "") {
        unset($login);
    }
}
/*соxpаняем введенное пользователем в форме password в переменную $pass, если оно пустое, то уничтожаем переменную*/
if (isset($_POST['pass'])) {
    $pass = $_POST['pass'];
    if ($pass == "") unset($pass);
}
/* если пользователь не ввел логин или пароль то выдает ошибку и оставливаем скрипт*/
if (empty($login) or empty($pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}


include("dbconnect.php");

$result=$mysqli->query("SELECT * FROM illuminos_users WHERE login='$login'");
$myrow = $result->fetch_assoc();
if (empty($myrow['login'])) {
    exit("Введенный вами логин или пароль неверный");
} else {
    if ($myrow['pass'] == $pass) {
        $_SESSION['login'] = $myrow['login'];
        $_SESSION['id'] = $myrow['id'];
        echo "Вы успешно вошли на сайт! <a href='watch-later.html'>Главная страница</a>";
    } else {
        exit("Введенный вами login или пароль неверный.");
    }
}    