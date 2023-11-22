<?php
/*сохраняем введенное пользователем в форме имя в переменную $name, если оно пустое, то уничтожаем переменную*/
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($name == "") {
        unset($name);
    }
}
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
/*подключаемся к базе данных*/
include("dbconnect.php");

$result=$mysqli->query("SELECT * FROM illuminos_users WHERE login='$login'");
$myrow = $result->fetch_assoc();
if (!empty($myrow['id'])) {
    exit("Введенный вами логин уже зарегистрирован. Введите другой логин");
}
$result_second = $mysqli->query("INSERT INTO illuminos_users (name, login, pass) VALUES('$name', '$login', '$pass')");
if ($result_second == true) {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт под своим именем.<a href ='login-register.html'> войти </a>";
} else {
    echo "ошибка";
}