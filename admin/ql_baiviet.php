<?php
	 require_once "../view/check.php";
?>
<!doctype html>
<html>
<head>
	<title>Quản lý bài viết</title>
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
		<h1>Danh sách bài viết</h1>
		<div class="new_img">
			<a href="ql_baiviet_add.php"><img src="../images/interface.png" width="50"></a>
		</div>
		<form class="table_dongsp">
			<table border="1" cellspacing="0" cellpadding="8">
				<tr class="title_thuonghieu">
					<td>STT</td>
					<td>Tên loại bài viết</td>
					<td>Tên bài viết</td>
					<td>Thời gian</td>
					<td>Trạng thái</td>
					<td colspan="3">Thao tác</td>
				</tr>
				<?php
					$dem=0;
					$query = "SELECT * FROM baiviet";
					$result = mysqli_query($con,$query) or die ("LOI TRUY VAN: ".mysqli_error($con));
					while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC)){
						$id_loai=$rows['id_loai'];
						$query1 ="SELECT ten_loai FROM loai_baiviet WHERE id_loai='$id_loai'";
						$result1 =mysqli_query($con, $query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
						$ten_loai=mysqli_fetch_array($result1,MYSQLI_ASSOC);
						$dem++;
						echo '<tr>
								<td class="stt_list">'.$dem.'</td>
								<td>'.$ten_loai['ten_loai'].'</td>
								<td>'.$rows["tieude"].'</td>
								<td>'.$rows["thoigian"].'</td>
								<td class="trang_thai">'.$rows["trangthai"].'</td>
								<td class="list_img">
									<a href="ql_baiviet_capnhat.php?id_baiviet='.$rows['id_baiviet'].'">
									<img src="../images/cogwheel-1.png"></a>
								</td>
								<td class="list_img">
									<a onclick="return window.confirm(\'Bạn muốn xóa mục này?\')" href="ql_baiviet_del.php?id_baiviet='.$rows['id_baiviet'].'">
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
