<?php
    session_start();
    $connection = mysqli_connect("localhost","root","123456","login");
    mysqli_set_charset($connection,"UTF8");
    
        
    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title>Welcome to the Frontpage</title>


<link rel="stylesheet" href="home_files/template.css" type="text/css">

<!-- Menu head -->
<link href="home_files/ja.css" rel="stylesheet" type="text/css">
<link href="home_files/default.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body id="bd" class="wide fs3">

<div id="ja-wrapper">

<!-- BEGIN: HEADER -->
<div id="ja-header" class="clearfix">
	<h1 class="logo">
		<a href="#" title="Course Management System"><span>Course Management System</span></a>
	</h1>
</div>
<!-- END: HEADER -->

<!-- BEGIN: MAIN NAVIGATION -->
<div id="ja-mainnavwrap">
	<div id="ja-mainnav">
		<ul id="ja-cssmenu" class="clearfix">
			<li class="active"><a href="quanlitaikhoan.html" class="menu-item0 active first-item" id="menu1" title="Home"><span class="menu-title">Quản lí tài khoản</span></a></li>
			<li class=""><a href="quanlibaidang.html" id="menu86" title="Documentation (Beta)"><span class="menu-title">Quản lí bài đăng</span></a></li> 
			<li class=""><a href="logout.php" id="menu86" title="Documentation \(Beta\)"><span class="menu-title">Đăng xuất</span></a></li>
		</ul>
	</div>	
</div>

<!-- END: MAIN NAVIGATION -->



<div id="ja-containerwrap-fr">
<div id="ja-container">
<div id="ja-container2" class="clearfix">

	<div id="ja-mainbody" class="clearfix">

		<!-- BEGIN: CONTENT -->
			<div class="title-module">ĐỔI MẬT KHẨU</div>
							<form name="edit_course"  method="POST">
								<table class="table-form-edit" align="center" bgcolor="#FFFFFF">							
									<tr>
										<td width="200">Mật khẩu cũ (*)</td>
										<td width="300"><input type="password"  name="oldpassword"></td>
									</tr>
									<tr>
										<td width="200">Mật khẩu mới (*)</td>
										<td width="300"><input type="password"  name="newpassword"></td>
									</tr>
									<tr>
										<td width="200">Xác nhận lại mật khẩu mới (*)</td>
										<td width="300"><input type="password"  name="renewpassword"></td>
									</tr>
															
									<tr>
										<td align="center" ></td>
										<td><input type="submit" value="Cập nhật" name="submit"></td>
									</tr>
								</table>
							</form>
							<?php
									if(isset($_POST['submit']))
									{
										if($_POST['newpassword']!=$_POST['renewpassword'])
										{?>
										<div style="display:flex;justify-content:center">
											<p style="color:red"><?php echo 'Sai khi xác nhận mật khẩu'; ?></p>
										</div>
											<?php
										}
										else
										{
										if(isset($_POST['oldpassword'])){
											$oldpassword = $_POST['oldpassword'];
										}
										if(isset($_POST['newpassword'])){
											$newpassword = $_POST['newpassword'];
										}
										if(isset($_POST['renewpassword'])){
											$renewpassword = $_POST['renewpassword'];
										}
										
								
										$id = $_SESSION['id'];
										$sql = "SELECT * FROM information where id = $id";
										$query = mysqli_query($connection,$sql);
										$result = mysqli_fetch_assoc($query);
										
									
									if($oldpassword != $result['password']){
								?>
									<div style="display:flex;justify-content:center">
										<p style="color:red"><?php echo 'Mật khẩu cũ không chính xác'; ?></p>
									</div>
										
								<?php
									}else{
										$sql2 = "UPDATE information set password = '$newpassword' where id = $id";
										$query2 = mysqli_query($connection,$sql2) or die(mysqli_errors($connection));?>
										<div style="display:flex;justify-content:center">
											<p style="color:blue"><?php echo 'Đổi mật khẩu thành công'; ?></p>
										</div>
										<?php
									}
								}
							}
								?>
					  
		<!-- END: CONTENT -->
				 
		</div>
		
		
<!-- BEGIN: LEFT COLUMN -->
<div id="ja-col1">
	<div class="moduletable_menu">
		<h3>Main Menu</h3>
			<ul class="menu">
				<li id="current" class="item1"><a href="quanlitaikhoan.html"><span>Thông tin tài khoản</span></a></li>
				<li class="item82"><a href="themtaikhoan.html"><span>Thêm tài khoản</span></a></li>
				<li class="item85"><a href="xoataikhoan.php"><span>Xóa tài khoản</span></a></li>
				<li class="active item86"><a href="doimatkhau.php"><span>Đổi mật khẩu</span></a></li>
			</ul>		
	</div>
	</div>
</div>

<!-- END: LEFT COLUMN -->
	
</div></div></div>

<!-- BEGIN: FOOTER -->
<div id="ja-footer" class="clearfix">

	
	<small>Copyright © 2009 TTTH Ứng dụng - Khoa CNTT. Designed by 
<a href="#" title="Visit Joomlart.com!" target="blank">TTTH</a>.</small>
<!--<small><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a></small> -->


</div>
<!-- END: FOOTER -->

</div>



</body></html>