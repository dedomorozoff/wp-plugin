<form>
    <p>Имя</p>
    <input type="text" name="name">
    <p>Адрес электронной почты</p>
    <input type="email" name="email">
    <p>Номер телефона</p>
    <input type="text" name="phone">
    <p>Способ получения сообщения</p>
    <select name="sposob">
        <option value="Почта">Почта</option>
        <option value="SMS">SMS</option>
        <option value="Whats App">Whats App сообщение</option>
    </select>
    <p>Сообщение</p>
    <textarea name="message"></textarea>
    <button class="cf-btn" name="cf-btn">Отправить</button>
    <span class="mes-form none"></span>
</form>

<script>

    // Обработка клика

    jQuery('button[name="cf-btn"]').on('click', function (event) {

        // Блокировка обновления страницы

        event.preventDefault()

        // Получение введенных данных

        let name = jQuery('input[name="name"]').val()
        let email = jQuery('input[name="email"]').val()
        let phone = jQuery('input[name="phone"]').val()
        let sposob = jQuery('select[name="sposob"]').val()
        let message = jQuery('textarea[name="message"]').val()

        // Передача данных через Ajax

        jQuery.ajax({
            url: "http://localhost:8000/wp-content/plugins/contact-form/inc/send-form.php",
            type: "POST",
            dataType: "html",
            data: {
                name: name,
                email: email,
                phone: phone,
                sposob: sposob,
                message: message
            },

            // Вывод сообщений

            success: function (data) {
                if (data == 'Запись успешно добавлена') {
                    jQuery('.mes-form').text(data).removeClass('none').removeClass('red');
                } else {
                    jQuery('.mes-form').text(data).removeClass('none').addClass('red');
                }

            }
        })
    })
</script>

<style>

    .mes-form {
        margin-top: 10px;
        display: block;
        padding: 10px;
        background: #00d084;
        color: #fff;
    }

    .none {
        display: none;
    }
    .red {
        background: #d0000b;
    }
    .cf-btn {
        margin-top: 10px;
    }

    select {
        background: #f7f7f7;
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
        border: 1px solid #d1d1d1;
        border-radius: 2px;
        color: #686868;
        padding: 0.625em 0.4375em;
        width: 100%;
    }
    p{
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 0;
    }
</style>