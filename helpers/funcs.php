<!--файл funcs.php - функция save_mess() -->

<?php
function save_mess(){
    $str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s') . "\n***\n" ;
// записываем все в файл gb.txt с помощью функции file_put_contents
    file_put_contents('gb.txt', $str, FILE_APPEND);
}
?>