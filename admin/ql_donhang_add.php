<?php
	require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Tạo đơn hàng</title>
	<link rel="stylesheet" href="../style/main_admin.css">
	<link rel="shortcut icon" type="image/png" href="../images/">
</head>
<body>
<div id="container">
	<div id="header">
		<?php include_once "header.php" ?>
	</div>
	<div id="sidebar.php">
		<?php include_once "sidebar.php" ?>
	</div>
	<!-- main content -->
	<div id="content">
		<h1>Tạo đơn hàng</h1>
		<div class="info_kh">
		<form>
			<table>
				<tr>
					<td class="title_thuonghieu">Mã đơn hàng:</td>
					<td><input type="text" name="id_dh"</td>
					<td class="title_thuonghieu">Mã khách hàng:</td>
					<td><input type="text" name="id_kh"></td>
					<td class="title_thuonghieu">Ngày mua:</td>
					<td><input type="text" name="time"></td>
				</tr>
				<tr>
					<td class="title_thuonghieu">Tên khách hàng:</td>
					<td><input type="text" name="tenkh"></td>
					<td class="title_thuonghieu">Giới tính:</td>
					<td></td>
					<td class="title_thuonghieu">Ngày sinh:</td>
					<td></td>
				</tr>
				<tr>
					<td class="title_thuonghieu">Địa chỉ:</td>
					<td><input type="text" name="diachi"></td>
					<td class="title_thuonghieu">Email:</td>
					<td><input type="text" name="email"></td>
					<td class="title_thuonghieu">Số điện thoại:</td>
					<td><input type="text" name="sdt"></td>
				</tr>
			</table>
		</form>
		</div>
		<div class="chitiet_donhang">
		<form>
			<table border="1" cellspacing="0" cellpadding="8">
				<tr class="title_thuonghieu">
					<td>STT</td>
					<td>Tên sản phẩm</td>
					<td>ĐVT</td>
					<td>Số lượng</td>
					<td>Đơn giá</td>
					<td>Thành tiền</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="tensp"></td>
					<td><input type="text" name="dvt"></td>
					<td class="number"><input type="text" name="soluong"></td>
					<td class="number"><input type="text" name="dongia"></td>
					<td class="number"></td>
				</tr>
				<tr>
					<td colspan="4" class="total_text">Tổng cộng</td>
					<td colspan="2" class="total"></td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</div>
</body>
</html>
