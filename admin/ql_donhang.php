<?php
	require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Quản lý đơn hàng</title>
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
	<div id="content">
		<h1>Danh sách đơn hàng</h1>
		<form class="table_hd">
			<table border="1" cellspacing="0" cellpadding="8">
				<tr class="title_thuonghieu">
					<td>Mã hóa đơn</td>
					<td>Tên khách hàng</td>
					<td class="number">Tổng tiền</td>
					<td>Thời gian</td>
					<td>Mô tả</td>
					<td class="trang_thai">Trạng thái</td>
					<td colspan="3">Thao tác</td>
				</tr>
				<tr>
					<td class="number">1</td>
					<td>Huỳnh Văn Hoàng</td>
					<td class="number">600.000</td>
					<td>20/11/20126</td>
					<td>Mua tại shop</td>
					<td>Thanh toán</td>
					<td class="list_img"><a href="ql_donhang_view.php"><img src="../images/binoculars.png"></a></td>
					<td class="list_        img"><a href="ql_donhang_capnhat.php"><img src="../images/cogwheel-1.png"></a></td>
					<td class="list_img"><a href="#"><img src="../images/delete-button.png"></a></td>
				</tr>
				<tr>
					<td class="number">2</td>
					<td>Nguyễn Thị Hoa</td>
					<td class="number">1.000.000</td>
					<td>23/11/20126</td>
					<td>Đặt hàng qua mạng</td>
					<td>Đặt hàng</td>
					<td class="list_img"><a href="ql_donhang_view.php"><img src="../images/binoculars.png"></a></td>
					<td class="list_img"><a href="ql_donhang_capnhat.php"><img src="../images/cogwheel-1.png"></a></td>
					<td class="list_img"><a href="#"><img src="../images/delete-button.png"></a></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
