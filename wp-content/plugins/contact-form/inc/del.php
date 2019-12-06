<?php


require_once 'connect.php';


$id=$_GET['id'];

//Запрос на удаление

$del = mysqli_query($con,"DELETE FROM `cf_table` WHERE `cf_table`.`id` = $id");

// Редирект на страницу админки

header('Location: http://localhost:8000/wp-admin/admin.php?page=contact-form%2Finc%2Fadmin-page.php');