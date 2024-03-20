<!--get_mess = takes all the data from the file-->
<!--array_mess = each separator is used for a new element of the array, where it will find ***-->

<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

require_once dirname(__DIR__) . '/guest_book/config/init.php';
require_once HELPERS . "/funcs.php"; // подключаем файл funcs.php
require_once "helpers/form.html";
require_once "helpers/create.php";
//$db = @mysqli_connect('127.0.0.1', 'root', '', 'gbook') or die ('Ошибка соединения с БД');
$conn = new mysqli("localhost", "root", "", "gbook");
echo 'Вывод сообщений  ';
require_once 'helpers/comment.php';

?>