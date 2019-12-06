<?php

require_once 'connect.php';

// Активировать функцию добавления

add_action('admin_menu', 'cf_add_admin');

// Добавляем шорткод

add_shortcode('contact-form', 'cf_show');

// Добавление в меню админ панели
function cf_add_admin () {
    add_menu_page('Плагин - форма обратной связи', 'Форма обратной связи','manage_options', 'contact-form/inc/admin-page.php');
}

// Отображаем форму

function cf_show () {
    require_once 'form.php';
}

//Задаем действие при активации плагина
register_activation_hook(__FILE__,'mess_admin');
add_action('admin_notices','mess_admin');

function mess_admin() {
	?>
	<div class="notice">
		<p>Таблица создана!</p>
	</div><?php
	$con = mysqli_connect('localhost','root', '', '1');
	mysqli_set_charset($con,'utf8');
	mysqli_query($con, "CREATE TABLE cf_table(id int)");
}