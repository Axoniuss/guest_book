<!--файл funcs.php - функция save_mess() -->

<?php
// save_mess для записи журнала в файл с проверкой в поле text
function save_mess()
{

    if (!empty($_POST['text'])) {
        $str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s') . "\n***\n";
// записываем все в файл gb.txt с помощью функции file_put_contents
    }
    file_put_contents('gb.txt', $str, FILE_APPEND);
}

// Функция берет все данные из док gb.txt
function get_mess()
{

    return file_get_contents('gb.txt');
}

//каждый разделитель служит на новый элемент массива, где найдет ***
// Вмещает все данные из gb.txt использует разделитель
function array_mess($messages)
{
    $messages = explode("\n***\n", $messages);
    array_pop($messages);
    return $messages;
}

function get_format_message($message)
{
    return explode('|', $message);
}

// Печатает в удобный формат
function print_arr($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

?>

