<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if (isset($_POST['text'])) {
            $name = $_POST['text'];
            $handle = fopen('index.php', 'a');
            fwrite($handle, $name."<br>");
            fclose($handle);
        }
    ?>
    <form action="" method="post">
        Name: <input type="text" name="text">
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>