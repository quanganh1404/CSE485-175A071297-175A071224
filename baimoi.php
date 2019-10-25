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
    //Lấy dữ liệu từ trong form
    $title = $_POST['title'];
    $content = $_POST['content'];

    //PHPMyadmin
    $connection = mysqli_connect("localhost","root","123456","baiviet");
    mysqli_set_charset($connection,"UTF8");
    //Xử lí mysql
    $username = stripcslashes($title);
    $password = stripcslashes($content);
    $username = mysqli_real_escape_string($connection,$title,);
    $password = mysqli_real_escape_string($connection,$content);


    if($title == ""){
        echo"Bạn chưa đặt tiêu đề cho bài viết";
    }
    else
    {
    //Query
    $result = mysqli_query($connection,"INSERT INTO baiviet VALUES ('','$title','$content')")
    or die("Failed to query database".mysql_error());
    echo"<br>Tiêu đề bài viết: $title <br><br>Nội dung:<br>$content <br>";
    }
?>
<form action="thembaidang.html">
    <input type="submit" value="Quay lại">
</form>
</body>
</html>