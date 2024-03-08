<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
require_once dirname(__DIR__) . '/guest_book/config/init.php';
require_once HELPERS . "/funcs.php"; // подключаем файл funcs.php
// принятие данных из формы
// если у нас не пуст массив $_POST, то вызовем некую функцию: save_mess
    print_r(("Location: {$_SERVER ['PHP_SELF' ]}"));
if (! empty ( $_POST )){
    save_mess();// пользовательская функция
    // редирект на этот же самый скрипт
    header ("Location: {$_SERVER ['PHP_SELF' ]}");
    exit;
}

?>


<!doctype html>
<html Lang="en">
<head>
    <meta charset ="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<!-- Создаем форму -->
<form action = "index.php" method = "post">
    <p>
        <h1>Гостевая книга</h1>
        <!-- название поля -->
        <label for ="name"> Имя:</label>
        <!-- поле для ввода имени -->
        <input type ="text" name ="name" id ="name">
    </p>
    <p>
        <!-- название поля -->
        <label for ="text"> Текст:</label>
        <!-- поле для ввода текста -->
        <textarea name = "text" id ="text"></textarea>
    </p>
    <!-- кнопка -->
    <button type ="submit"> Написать </button>
</form>
</body>
