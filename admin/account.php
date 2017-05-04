<?php
	 require_once "../view/check.php";
	 $id_user = $_REQUEST['id_user'];
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
	<?php
		$query="SELECT * FROM user WHERE id_user='$id_user'";
		$result=mysqli_query($con, $query) or die("LOI TRUY VAN: ".mysqli_error($con));
		$rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
	?>
		<h1>Thông tin tài khoản</h1>
		<img src="<?=$rows["hinh_dh"] ?>" width="250" height="255" class="hinh_dh">
		<div class="account">
			<form>
				<table cellspacing="12">
					<tr>
						<td class="title_account">Họ và tên:</td>
						<td><?php echo $rows["hoten"]; ?></td>
					</tr>
					<tr>
						<td class="title_account">Ngày sinh:</td>
						<td><?php echo $rows["ngay"]."/".$rows["thang"]."/".$rows["nam"]; ?></td>
					</tr>
					<tr>
						<td class="title_account">Địa chỉ:</td>
						<td><?php echo $rows["dia_chi"]; ?></td>
					</tr>
					<tr>
						<td class="title_account">Email:</td>
						<td><?php echo $rows["email"]; ?></td>
					</tr>
					<tr>
						<td class="title_account">Số điện thoại:</td>
						<td><?php echo $rows["sdt"]; ?></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="button_account">
		<?php
			echo '
				<a href="ql_users_capnhat.php?id_user='.$rows['id_user'].' ">Sửa thông tin</a>
				<a href="change_password.php?id_user='.$rows['id_user'].'">Đổi mật khẩu </a>
			';
		?>
		</div>
	</div>
</div>
</body>
</html>
