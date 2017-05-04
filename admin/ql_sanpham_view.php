<?php
	include_once "../models/connect.php";
	$id_sp= $_REQUEST['id_sp'];
?>
<!doctype html>
<html>
<head>
	<title>Xem thông tin sản phẩm</title>
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
	<?php
		$query = "SELECT * FROM sanpham WHERE id_sp='$id_sp'";
		$result = mysqli_query($con,$query) or die ("LOI TRUY VAN: ".mysqli_error($con));
		$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$id_th = $rows['id_th'];
		$query1="SELECT ten_th FROM thuong_hieu WHERE id_th='$id_th'";
		$result1 =mysqli_query($con,$query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
		$ten_th=mysqli_fetch_array($result1, MYSQLI_ASSOC);
		$id_loaisp = $rows['id_loaisp'];
		$query2="SELECT ten_loaisp FROM loaisp WHERE id_loaisp='$id_loaisp'";
		$result2 = mysqli_query($con,$query2) or die ("LOI TRUY VAN: ".mysqli_error($con));
		$ten_loaisp = mysqli_fetch_array($result2, MYSQLI_ASSOC);
	?>
		<h1>Xem thông tin sản phẩm</h1>
		<div class="table_viewsp">
			<form>
				<table cellpadding="12">
					<tr>
						<td class="title_view">Mã sản phẩm</td>
						<td><?php echo $rows["ma_sp"]; ?></td>
					</tr>
					<tr>
						<td class="title_view">Tên sản phẩm:</td>
						<td><?php echo $rows["ten_sp"]; ?></td>
					</tr>
					<tr>
						<td class="title_view">Loại sản phẩm:</td>
						<td><?php echo $ten_loaisp['ten_loaisp']; ?></td>
					</tr>
					<tr>
						<td class="title_view">Thương hiệu</td>
						<td><?php echo $ten_th['ten_th']; ?></td>
					</tr>
					<tr>
						<td class="title_view">Đơn giá:</td>
						<td><?php echo number_format($rows["gia_sp"]); ?></td>
					</tr>
					<tr>
						<td class="title_view">Dung lượng:</td>
						<td><?php echo $rows['dung_luong']; ?></td>
					</tr>

					<tr>
						<td class="title_view">Xuất xứ:</td>
						<td><?php echo $rows['xuat_xu'] ?></td>
					</tr>
					<tr>
						<td class="title_view">Mô tả chi tiết:</td>
						<td><?php echo $rows['mota_chitiet'] ?></td>
					</tr>
					<tr>
						<td class="title_view">Trạng thái:</td>
						<td><?php echo $rows['trangthai'] ?></td>
					</tr>
					<tr>
						<td class="title_view">Hình ảnh</td>
						<td>
							<img src="<?=$rows["hinh_anh"] ?>">
						</td>
					</tr>
				</table>
			</form>
			<div class="button_account">
				<a href="ql_sanpham.php">Quay lại</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
