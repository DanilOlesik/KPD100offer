<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $consent = isset($_POST['consent']) ? 'Согласен' : 'Не согласен';

    // Настройки почты

    $to = "romedzzzo@mail.ru";
                $to = "danil0077@bk.ru";
        $to = "nikdv27@bk.ru";
 // Замените на ваш email
    $subject = "Новая заявка с сайта";
    
    // Содержание письма
    $message = "
    <html>
    <head>
    <title>$subject</title>
    </head>
    <body>
    <h2>$subject</h2>
    <p><b>Имя:</b> $name</p>
    <p><b>Телефон:</b> $phone</p>
    <p><b>Согласие на обработку данных:</b> $consent</p>
    </body>
    </html>
    ";

    // Заголовки письма
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: КПД ЛЕНДИНГ «5.3 млн руб» <no-reply@kpd100zavod.ru>" . "\r\n";

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения!";
    }
}
?>
