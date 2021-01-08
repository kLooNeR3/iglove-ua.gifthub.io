<?php
$mailto = "vadim01010133@gmail.com";
$charset = "windows-1251";
$subject = $_POST['posRegard'];
$content = "text/plain";
$message = $_POST['posText'];
$statusError = "";
$statusSuccess = "";
$errors_name = 'Введите ваше имя';
$errors_mailfrom = 'Введите свой E-mail адрес';
$errors_incorrect = 'Заполните правильно Ваш E-mail адрес';
$errors_message = 'Наберите текст вашего сообщения';
$errors_subject = 'Введите тему сообщения';
$captcha_error = 'Проверьте правильность ввода защитного кода';
$send = 'Ваш заказ в обработке. Через 5-10 ми Вам перезвоним.';
?>