<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">THÊM BÀI VIẾT</h1>
    <br>
    <br>
    <form action="baimoi.php" method="post">
        <table>	
            <tr>
                <td nowrap="nowrap">Tiêu đề bài viết :</td>
                <td><input type="text" id="title" name="title"></td>
            </tr>
            <tr>
                <td nowrap="nowrap">Nội dung :</td>
                <td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết"></td>
            </tr>
		</table>
    </form>
</body>
</html>