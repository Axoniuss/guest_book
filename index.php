<!--get_mess = takes all the data from the file-->
<!--array_mess = each separator is used for a new element of the array, where it will find ***-->
<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);


// Подключение к базе данных
$db = @mysqli_connect('127.0.0.1', 'root', '', 'gbook') or die ('Ошибка соединения с БД');
echo mysqli_connect_error();
// если нет подключения, тогда мы выведем текст ошибки mysqli_connect_error(), и завершим дальнейшее выполнение скрипта - die
if (!$db) die (mysqli_connect_error());
var_dump($db); // смотрим, что получилось
$insert = "INSERT INTO comments (login, text) VALUES ('Оля', 'ПРИВЕТ')";
// выполняем запрос
$res_insert = mysqli_query($db, $insert);

// проверяем выполнение запроса
if ($res_insert) echo 'Ok';
else echo 'Error';

// выводим строку с описанием последней ошибки (если она есть)
echo mysqli_error($db);

// второй способ посмотреть ошибку - вывести сам запрос
echo $insert;

require_once dirname(__DIR__) . '/guest_book/config/init.php';
require_once HELPERS . "/funcs.php"; // подключаем файл funcs.php
// принятие данных из формы
// если у нас не пуст массив $_POST, то вызовем некую функцию: save_mess
if (!empty ($_POST)) {
    save_mess();// пользовательская функция
    // редирект на этот же самый скрипт
    header("Location: {$_SERVER ['PHP_SELF' ]}");
    exit;
}
echo 'Вывод массива';
$messages = get_mess();
$messages = array_mess($messages);
//print_arr($messages);
?>


<!doctype html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<!-- Создаем форму -->
<form action="index.php" method="post">
    <p>
    <h1>Гостевая книга</h1>
    <!-- название поля -->
    <label for="name"> Имя:</label>
    <!-- поле для ввода имени -->
    <input type="text" name="name" id="name">
    </p>
    <p>
        <!-- название поля -->
        <label for="text"> Текст:</label>
        <!-- поле для ввода текста -->
        <textarea name="text" id="text"></textarea>
    </p>
    <!-- кнопка -->
    <button type="submit"> Написать</button>
</form>

<hr>

<?php
if (!empty ($messages)): ?>
    <!-- проходим по массиву $messages в цикле и выводим наши сообщения -->
    <?php foreach ($messages as $message) : ?>
        <!-- возвращает, разбитую в массив строку -->
        <?php $message = get_format_message($message); //print_r($message) ?>
        <!-- выводим полученные наши данные -->
        <div class="messages">
            <hr>
            <p> Автор: <?= $message[0] ?> | Дата: <?= $message[2] ?> </p>
            <?= nl2br(htmlspecialchars($message[1])) ?>
            <hr>
        </div
    <?php endforeach; ?>
<?php endif ?>
</body>
</html>