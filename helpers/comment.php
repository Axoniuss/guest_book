<?php
$messages = get_mess();
$messages = array_mess($messages);
//print_arr($messages);
?>


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