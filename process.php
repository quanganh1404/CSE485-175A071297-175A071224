<?php
    session_start();
    //Lấy dữ liệu từ trong form
    $username = $_POST['user'];
    $password = $_POST['password'];

    //PHPMyadmin
    $connection = mysqli_connect("localhost","root","123456","login");
    mysqli_set_charset($connection,"UTF8");
    //Xử lí mysql
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($connection,$username,);
    $password = mysqli_real_escape_string($connection,$password);


    //Query
    $result = mysqli_query($connection,"SELECT * FROM information WHERE name like '$username' and password like '$password'")
    or die("Failed to query database".mysql_error());
    $row = mysqli_fetch_array($result);

    $level = 0; 
    if($username == "" && $password == "")
    {
        header("Location:index.php");
    }
    else
    {
        if($row['name'] == $username && $row['password'] == $password)
        {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name']=$username;
            $_SESSION['level']=$level;
            $admin=$row['administrator'];
            if($row['administrator'] == '1')
            header("Location:home.php");
            else
            header("Location:home_guest.php");
            /* 
             */
        }
        else
            {
                header("Location:index.php");
            }
    }
?>