<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';
    $database = 'login';
    $conn = mysqli_connect($hostname,$username,$password,$database)
    or die("Connection error");
    $query = mysqli_query($conn,"SELECT * from information");


    #Lấy dữ liệu từ trong box
    $delete =$_POST['delete'];

    //Xử lý mysql
    $delete = str_replace('”','',$delete);
    $delete = str_replace('″','',$delete);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $sql = mysqli_query($conn,"DELETE FROM information WHERE name like '$delete'");
        echo"Đã xóa tài khoản $delete";
    }
?>
<form action="xoataikhoan.php">
    <input type="submit" value="Quay lại">
</form>
</body>
</html>