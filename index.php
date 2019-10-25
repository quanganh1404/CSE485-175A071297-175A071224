<?php 
    session_start();
    if(isset($_SESSION['name'])){
        header("Location:home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <div class="form">
        <form action="process.php" method="POST">
            <label>Nhập tên đăng nhập:</label>
            <br>
            <input type="text" name="user" id="user">
            <br>
            <label>Nhập mật khẩu:</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <br>
            <input type="submit" value="Đăng nhập" class="button">
        </form>
    </div>
</body>
</html>