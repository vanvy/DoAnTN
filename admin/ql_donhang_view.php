<?php
	require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Đơn hàng chi tiết</title>
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
		<h1>Đơn hàng chi tiết</h1>
		<div class="info_kh">
		<form>
			<table>
				<tr>
					<td class="title_thuonghieu">Mã đơn hàng:</td>
					<td>01</td>
					<td class="title_thuonghieu">Mã khách hàng:</td>
					<td>10</td>
					<td class="title_thuonghieu">Ngày mua:</td>
					<td>30/11/2016</td>
				</tr>
				<tr>
					<td class="title_thuonghieu">Tên khách hàng:</td>
					<td>Nguyễn Văn A</td>
					<td class="title_thuonghieu">Giới tính:</td>
					<td>Nam</td>
					<td class="title_thuonghieu">Ngày sinh:</td>
					<td>10/05/1990</td>
				</tr>
				<tr>
					<td class="title_thuonghieu">Địa chỉ:</td>
					<td>123 Nguyễn Văn Linh</td>
					<td class="title_thuonghieu">Email:</td>
					<td>VanA @gmail.com</td>
					<td class="title_thuonghieu">Số điện thoại:</td>
					<td>0123987567</td>
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
					<td class="stt_list">1</td>
					<td>Sửa rửa mặt E100</td>
					<td>Bình</td>
					<td class="number">2</td>
					<td class="number">10,000</td>
					<td class="number">20,000</td>
				</tr>
				<tr>
					<td class="stt_list">2</td>
					<td>Nước hoa hồng The Face</td>
					<td>Chai</td>
					<td class="number">1</td>
					<td class="number">320,000</td>
					<td class="number">320,000</td>
				</tr>
				<tr>
					<td colspan="4" class="total_text">Tổng cộng</td>
					<td colspan="2" class="total">340,000</td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</div>
</body>
</html>
