<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thành công</title>
</head>
<body>
    <?php
    session_start();
    $connection = mysqli_connect("localhost","root","123456","login");
    mysqli_set_charset($connection,"UTF8");
    if(isset($_POST['submit'])){
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $renewpassword = $_POST['renewpassword'];

        //PHPMyadmin
        
        //Xử lí mysql
        // $username = stripcslashes($user);
        // $oldpassword = stripcslashes($oldpassword);
        // $newpassword = stripslashes($newpassword);
        // $renewpassword = stripslashes($renewpassword);
        // $username = mysqli_real_escape_string($connection,$user);
        // $password = mysqli_real_escape_string($connection,$oldpassword);
        // $username = mysqli_real_escape_string($connection,$newpassword,);
        // $username = mysqli_real_escape_string($connection,$renewpassword,);
        
        

        //Query
        // $result1 = mysqli_query($connection,"SELECT * FROM information WHERE name like '$user' and password like '$oldpassword'")
        // or die("Failed to query database".mysql_error());
        // $result2 = mysqli_query($connection,"UPDATE  FROM information WHERE");
        // $row = mysqli_fetch_array($result);
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM information where id = $id";
        $query = mysqli_query($connection,$sql);
        $result = mysqli_fetch_assoc($query);
        if($oldpassword != $result['password']){
            echo 'mat khau cu k chinh xac';
        }else{
            echo 'chinh xac';
        }
    }
        
    ?>
</body>
</html>