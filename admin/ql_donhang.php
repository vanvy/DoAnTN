<?php
require_once "../view/check.php";
	$query = "SELECT hoadon.id_hd as id_hd,
					hoadon.id_kh as id_kh,
					hoadon.ngay_lap as ngay,
					hoadon.nam_lap as nam,
					hoadon.thang_lap as thang,
					hoadon.id_user as id_user,
					hoadon.tongtien as tongtien,
					hoadon.status as status,
					khachhang.ten_kh as ten_kh
			FROM hoadon, khachhang
			WHERE hoadon.id_kh = khachhang.id_kh
			ORDER BY id_hd
			DESC";
	$result = mysqli_query($con, $query) or die("ERROR SELECT HOADON: ".mysqli_error($con));
	$count = 0;
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
						<td>STT</td>
						<td>Tên khách hàng</td>
						<td class="number">Tổng tiền</td>
						<td>Thời gian</td>
						<td class="trang_thai">Trạng thái</td>
						<td colspan="2">Thao tác</td>
					</tr>
					<?php
					while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						$count++;
						?>
						<tr>
							<td  class="stt_list"><?php echo $count; ?></td>
							<td><?php echo $rows['ten_kh']; ?></td>
							<td class="number"><?php echo number_format($rows['tongtien']); ?></td>
							<td>
								<?php echo $rows['ngay']."/".$rows['thang']."/".$rows['nam']; ?>
							</td>
							<td class="stt_list"><?php echo $rows['status']; ?></td>
							<td class="list_img">
								<a href="ql_donhang_view.php?id_hd=<?php echo $rows['id_hd']; ?>&id_kh=<?php echo $rows['id_kh'];?>">
									<img src="../images/binoculars.png">
								</a>
							</td>
							<td class="list_img">
								<a 
								href="ql_donhang_del.php?id_hd=<?php echo $rows['id_hd']; ?>&id_kh=<?php echo $rows['id_kh'];?>"
								onclick="return window.confirm('Bạn có muốn xóa mục này?')"
								>
								<img src="../images/delete-button.png">
							</a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
			<h3 style="margin-top: 25px; text-align: center; color: red;">
				<?php if(isset($_REQUEST['msg'])) echo $_REQUEST['msg']; ?>
			</h3>
		</form>
	</div>

</div>
</body>
</html>
