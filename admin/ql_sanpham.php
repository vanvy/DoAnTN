<?php
	 require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
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
		<h1>Danh sách sản phẩm</h1>
		<div class="new_img">
			<a href="ql_sanpham_add.php"><img src="../images/interface.png" width="50"></a>
		</div>
		<!-- <p class="new"><a href="ql_sanpham_add.php">Thêm mới</a></p> -->
		<form class="table_sp">
			<table border="1" cellspacing="0" cellpadding="8">
				<tr class="title_thuonghieu">
					<td>STT</td>
					<td>Dòng sản phẩm</td>
					<td class="name_sp">Tên sản phẩm</td>
					<td>Số lượng</td>
					<td>Đơn giá</td>
					<td>Sale (%)</td>
					<td>Trạng thái</td>
					<td colspan="4">Thao tác</td>
				</tr>
				<?php
					$query="SELECT * FROM sanpham";
					$result=mysqli_query($con,$query) or die ("LOI LIET KE SAN PHAM: ".mysqli_error($con));
					$dem=0;
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
						$id_dsp=$row['id_dsp'];
						$query1="SELECT ten_dsp FROM dong_sp WHERE id_dsp='$id_dsp'";
						$result1=mysqli_query($con, $query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
						$ten_dsp= mysqli_fetch_array($result1, MYSQLI_ASSOC);
						$dem++;
						echo '<tr>
								<td class="stt_list">'.$dem.'</td>
								<td>'.$ten_dsp['ten_dsp'].'</td>
								<td>'.$row["ten_sp"].'</td>
								<td class="number">'.$row["soluong"].'</td>
								<td class="number">'.number_format($row["gia_sp"]).'</td>
								<td class="number">'.number_format($row["sale"]).'</td>
								<td class="trang_thai">'.$row["trangthai"].'</td>
								<td class="list_img">
									<a href="ql_sanpham_sale.php?id_sp='.$row['id_sp'].'">
									<img src="../images/sale.png">
									</a>
								</td>
								<td class="list_img">
									<a href="ql_sanpham_view.php?id_sp='.$row['id_sp'].'">
									<img src="../images/binoculars.png">
									</a>
								</td>
								<td class="list_img">
									<a href="ql_sanpham_capnhat.php?id_sp='.$row['id_sp'].'">
									<img src="../images/cogwheel-1.png">
									</a>
								</td>
								<td class="list_img">
									<a onclick="return window.confirm(\'Bạn muốn xóa mục này?\')" href="ql_sanpham_del.php?id_sp='.$row['id_sp'].'">
									<img src="../images/delete-button.png">
									</a>
								</td>
							</tr>';
					}
				?>
			</table>
		</form>
	</div>
</div>
</body>
</html>
