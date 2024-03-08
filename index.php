<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
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
