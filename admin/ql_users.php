<?php
	require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Quản lý người dùng</title>
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
		<h1>Danh sách người dùng</h1>
		<div class="list">
			<form>
				<table border="1" cellspacing="0" cellpadding="6">
					<tr class="title_list">
						<td>STT</td>
						<td class="hoten">Họ và tên</td>
						<td>Email</td>
						<td>Phân quyền</td>
						<td colspan="3">Thao tác</td>
					</tr>
					<?php
						$dem=0;
						$query="SELECT * FROM user";
						$result=mysqli_query($con,$query) or die("LOI LIET KE: ".mysqli_error($con));
						while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
							$dem++;
							echo '<tr>
									<td class="stt_list">'.$dem.'</td>
									<td>'.$rows["hoten"].'</td>
									<td>'.$rows["email"].'</td>
									<td>'.$rows["phanquyen"].'</td>
									<td class="list_img">
										<a href="account.php?id_user='.$rows['id_user'].'">
										<img src="../images/binoculars.png"></a>
									</td>
									<td class="list_img">
										<a href="ql_users_capnhat.php?id_user='.$rows['id_user'].'">
										<img src="../images/cogwheel-1.png"></a>
									</td>
									<td class="list_img">
										<a onclick="return window.confirm(\'Bạn muốn xóa mục này?\')" href="ql_users_del.php?id_user='.$rows['id_user'].'">
										<img src="../images/delete-button.png"></a>
									</td>
								 </tr>';
						}
					?>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
