<?php
	 require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Thay đổi mật khẩu</title>
	<link rel="stylesheet" href="../style/main_admin.css">
	<link rel="shortcut icon" type="image/png" href="../images/shape-1.png">
</head>
<body>
<div id="container">
	<div id="header">
		<?php include_once "header.php" ?>
	</div>
	<div id="sidebar.php">
		<?php include_once "sidebar.php" ?>
	</div>
	<!-- main_content -->
	<div id="content">
		<h1>Thay đổi mật khẩu</h1>
		<form class="account">
			<table cellspacing="12">
				<tr>
					<td class="title_account">Mật khẩu cũ:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td class="title_account">Mật khẩu mới:</td>
					<td><input type="password" name="new_pass"></td>
				</tr>
				<tr>
					<td class="title_account">Nhập lại:</td>
					<td><input type="password" name="new_pass1"></td>
				</tr>
				<tr>
					<td colspan="2" class="button_cap_nhat">
						<input type="submit" name="save" value="Lưu">
						<input type="reset" value="Hủy">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
