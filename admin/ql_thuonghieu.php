<?php
	include_once "../models/connect.php";
?>
<!doctype html>
<html>
<head>
	<title>Quản lý thương hiệu</title>
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
		<h1>Danh sách thương hiệu</h1>
		<div class="new_img">
			<a href="ql_thuonghieu_add.php"><img src="../images/interface.png" width="50"></a>
		</div>
		<div class="table_thuonghieu">
			<form>
				<table border="1" cellspacing="0" cellpadding="8">
					<tr class="title_thuonghieu">
						<td>STT</td>
						<td>Tên thương hiệu</td>
						<td>Xuất xứ</td>
						<td>Mô tả</td>
						<td>Trạng thái</td>
						<td colspan="2">Thao tác</td>
					</tr>
					<?php
						$dem=0;
						$query="SELECT * FROM thuong_hieu";
						$result=mysqli_query($con,$query) or die ("LOI TRUY VAN: ".mysqli_error($con));
						while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							$dem++;
							echo '<tr>
									<td class="stt_list">'.$dem.'</td> 
									<td>'.$rows["ten_th"].'</td>
									<td>'.$rows["xuat_xu"].'</td>
									<td>'.$rows["mota"].'</td>
									<td class="trang_thai">'.$rows["trangthai"].'</td>
									<td>
										<a href="ql_thuonghieu_capnhat.php?id_th='.$rows["id_th"].'">
										<img src="../images/cogwheel-1.png"></a>
									</td>
									<td>
										<a onclick="return window.confirm(\'Bạn muốn xóa mục này?\')" href="ql_thuonghieu_del.php?id_th='.$rows["id_th"].'">
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