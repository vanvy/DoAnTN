<?php
	require_once "../view/check.php";
  // lay id_kh, id_hd
  $idHd = $_REQUEST['id_hd'];
  $idKh = $_REQUEST['id_kh'];
  $query = "SELECT khachhang.id_kh as id_kh,
			       khachhang.ten_kh as ten_kh,
			       khachhang.sdt as sdt,
			       khachhang.diachi as diachi,
			       hoadon.ngay_lap as ngay,
			       hoadon.thang_lap as thang,
			       hoadon.nam_lap as nam
			FROM khachhang, hoadon
			WHERE khachhang.id_kh = hoadon.id_kh
			AND hoadon.id_hd=".$idHd;
;
  $result = mysqli_query($con, $query) or die ("ERROR SELECT KHACH HANG: ".mysqli_error($con));
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
					<td><?php echo $idHd; ?></td>
					<td class="title_thuonghieu">Mã khách hàng:</td>
					<td><?php echo $row['id_kh']; ?></td>
					<td class="title_thuonghieu">Ngày mua:</td>
					<td>
						<?php echo $row['ngay']."/".$row['thang']."/".$row['nam']; ?>
					</td>
				</tr>
				<tr>
					<td class="title_thuonghieu">Tên khách hàng:</td>
					<td><?php echo $row['ten_kh']; ?></td>
					<td class="title_thuonghieu">Địa chỉ:</td>
					<td><?php echo $row['diachi']; ?></td>
					<td class="title_thuonghieu">Số điện thoại:</td>
					<td><?php echo $row['sdt']; ?></td>
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
					<td>Số lượng</td>
					<td>Đơn giá</td>
					<td>Sale</td>
					<td>Thành tiền</td>
				</tr>
				<?php
					$query1 = "SELECT chitiethd.soluong as soluong,
								       chitiethd.gia as gia,
								       chitiethd.sale as sale,
								       chitiethd.thanhtien as thanhtien,
								       sanpham.id_sp as id_sp,
								       sanpham.ten_sp as ten_sp
								FROM chitiethd, sanpham
								WHERE chitiethd.id_sp=sanpham.id_sp
								AND chitiethd.id_hd=".$idHd;
					$result1 = mysqli_query($con, $query1) or die ("ERROR SELECT CTHD BY IDHD:".mysqli_error($con));
					$count = 0;
					$total = 0;
					while($rows = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
						$count++;
						$total += $rows['thanhtien'];
						?>
						<tr>
							<td class="stt_list"><?php echo $count; ?></td>
							<td><?php echo $rows['ten_sp']; ?></td>
							<td class="number"><?php echo $rows['soluong']; ?></td>
							<td class="number"><?php echo number_format($rows['gia']); ?></td>
							<td class="number"><?php echo $rows['sale']; ?></td>
							<td class="number"><?php echo number_format($rows['thanhtien']); ?></td>
						</tr>
						<?php
					}
					?>
				<tr>
					<td colspan="5" class="total_text">Tổng cộng</td>
					<td colspan="3" class="total"><?php echo number_format($total); ?></td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</div>
</body>
</html>
