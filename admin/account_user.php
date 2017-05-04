<?php
	 require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Thông tin tài khoản</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style/main_admin.css">
	<link rel="shortcut icon" type="image/png" href="../images/shape-1.png">
</head>
<body>
<div id="container">
	<div id="header">
		<?php include_once "header.php"; ?>
	</div>
	<div id="sidebar">
		<?php include_once "sidebar.php"; ?>
	</div>
	<!-- main content -->
	<div id="content">
		<h1>Thông tin tài khoản</h1>
		<div class="account">
			<form>
				<table cellspacing="12">
					<tr>
						<td class="title_account">Họ và tên:</td>
						<td>Nguyễn Văn A</td>
					</tr>
					<tr>
						<td class="title_account">Giới tính:</td>
						<td>Nam</td>
					</tr>
					<tr>
						<td class="title_account">Ngày sinh:</td>
						<td>24/08/1990</td>
					</tr>
					<tr>
						<td class="title_account">Địa chỉ:</td>
						<td>123 Hoàng Diệu</td>
					</tr>
					<tr>
						<td class="title_account">Email:</td>
						<td>avannguyen@gmail.com</td>
					</tr>
					<tr>
						<td class="title_account">Số điện thoại:</td>
						<td>0905190087</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="button_account_user">
			<a href="ql_users.php">Quay lại</a>
		</div>
	</div>
</div>
</body>
</html>
