<?php
	include_once "../models/connect.php";
?>
<!doctype html>
<html>
<head>
	<title>Quản lý dòng sản phẩm</title>
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
		<h1>Danh sách dòng sản phẩm</h1>
		<div class="new_img">
			<a href="ql_dongsp_add.php"><img src="../images/interface.png" width="50"></a>
		</div>
		<form class="table_dongsp">
			<table border="1" cellspacing="0" cellpadding="8">
				<tr class="title_thuonghieu">
					<td>STT</td>
					<td>Tên dòng sản phẩm</td>
					<td>Mô tả</td>
					<td>Tình Trạng</td>
					<td colspan="2">Thao tác</td>
				</tr>
				<?php
					$dem=0;
					$query = "SELECT * FROM dong_sp";
					$result = mysqli_query($con,$query) or die ("LOI TRUY VAN: ".mysqli_error($con));
					while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)){
						$dem++;
						echo '<tr>
								<td class="stt_list">'.$dem.'</td>
								<td>'.$rows["ten_dsp"].'</td>
								<td>'.$rows["mota"].'</td>
								<td class="trang_thai">'.$rows["trangthai"].'</td>
								<td class="list_img">
									<a href="ql_dongsp_capnhat.php?id_dsp='.$rows['id_dsp'].'">
									<img src="../images/cogwheel-1.png"></a>
								</td>
								<td class="list_img">
									<a onclick="return window.confirm(\'Bạn muốn xóa mục này?\')" href="ql_dongsp_del.php?id_dsp='.$rows['id_dsp'].'">
									<img src="../images/delete-button.png"></a>
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
