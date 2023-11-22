<?php

declare(strict_types=1);

$mysqli = mysqli_connect('localhost', 'root', '', 'illuminos_database_users');

if (!$mysqli) {
    echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
    echo 'Код ошибки: ' . mysqli_connect_errno();
    die('Connect Error (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}
