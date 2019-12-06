<?php

require_once 'connect.php';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sposob = $_POST['sposob'];
$message = $_POST['message'];

// Проверка полей

if ($name == '' || $email == '' || $phone == '' || $sposob == '' || $message == '') {
    die('Заполните все поля');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Проверьте правильность введенного Email');
}

// Добавление записи

mysqli_query($con, "INSERT INTO `cf_table` (`id`, `name`, `email`, `phone`, `type_send`, `message`) 
VALUES (NULL, '$name', '$email', '$phone', '$sposob', '$message')");

echo 'Запись успешно добавлена';