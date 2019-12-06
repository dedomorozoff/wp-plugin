<h1>Плагин формы обратной связи</h1>
<p>Добавьте шорт код <b>[contact-form]</b> на нужную страницу</p>

<table>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Email</th>
        <th>Телефон</th>
        <th>Способ получения</th>
        <th>Сообщение</th>
    </tr>

    <?php
    require_once 'connect.php';

    // Вывод из базы

    $messages = mysqli_query($con, 'SELECT * FROM `cf_table`');

    while ($message = mysqli_fetch_assoc($messages)){
        echo '<tr>
                <td>'. $message[id].'</td>
                <td>'. $message[name].'</td>
                <td>'. $message[email].'</td>
                <td>'. $message[phone].'</td>
                <td>'. $message[type_send].'</td>
                <td>'. $message[message].'</td>
                <td><a href="http://localhost:8000/wp-content/plugins/contact-form/inc/del.php?id='. $message[id].'">Удалить</a></td>
    </tr>';
    }
    ?>

</table>

<style>
    th{
        padding: 5px;
        background: #b6cccb;
    }
    td{
        padding: 5px;
        background: #00A8EF;
        color: #fff;
    }

    td a {
        background: #ff3d33;
        color: #fff;
        padding: 3px;
        border-radius: 5px;
    }
    td a:hover {
        color#000;
    }
</style>