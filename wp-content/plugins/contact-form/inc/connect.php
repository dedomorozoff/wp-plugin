<?php

// Подключение к базе данных

$con = mysqli_connect('localhost','root', '', '1');
mysqli_set_charset($con,'utf8');

// Проверка подключения

if ($con == false) {
    die('Подключение не выполнено');
}