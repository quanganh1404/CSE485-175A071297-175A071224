<?php
    session_start();
    unset($_SESSION['name']);
    header("Location:index.php")
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
        header("Location:http://localhost/index.php/BTL/");
    ?>
</body>
</html> -->