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
    $connection = mysqli_connect("localhost","root","123456","login");
    if(isset($_POST['btn_submit']))
    {
        //Lấy dữ liệu từ trong form
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];
        
        
        //Kiểm tra rỗng
        if($username == "" || $password == "" || $password_again == "")
        {
            header("Location:http://localhost/index.php/Login/NTT./them_taikhoan.php");
        }
        else
        {
            $result = mysqli_query($connection,"SELECT * FROM information WHERE name like '$username' and password like '$password'")
            or die("Failed to query database".mysql_error());
            $row = mysqli_fetch_array($result);
            if($row['name'] == $username && $row['password'] == $password)
            {
                echo"Tài khoản đã tồn tại";
            }
            else
            {
                if($password != $password_again)
                echo"Bạn nhập 2 pass không giống nhau";
                else
                {
                    //PHPMyadmin
                    /* $connection = mysqli_connect("localhost","root","123456","login"); */
                    $result = mysqli_query($connection,"INSERT INTO information VALUES('','$username','$password','')")
                    or die("Failed to query database".mysql_error());
                    echo"Đã tạo xong tài khoản: <br>Username : $username <br>Password : $password";
                }
            }
        }
    }
?>
<form action="logout.php">
    <input type="submit" value="Đăng xuất">
</form>
<form action="themtaikhoan.html">
    <input type="submit" value="Quay lại">
</form>
</body>
</html>