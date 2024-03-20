<?php

if (isset($_POST["username"]) && isset($_POST["userage"])) {

    $conn = new mysqli("localhost", "root", "", "gbook");
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["username"]);
    $age = $conn->real_escape_string($_POST["userage"]);
    $sql = "INSERT INTO Users (name, age) VALUES ('$name', $age)";
    if ($conn->query($sql)) {
        echo "Данные успешно добавлены";
    } else {
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!DOCTYPE html>
    <html>
    <body>
    <form action='/guest_book/helpers/index.php' method="post">
        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
    </form>
    </body>
    </html>
</head>
<body>

</body>
</html>
