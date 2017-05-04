<?php
include_once "../models/connect.php";
$id_loai = $_REQUEST["id_loai"];
if(isset($_POST["save"])){
	$ten_loai=$_POST["ten_loai"];
	$mota=$_POST["mota"];
	$trang_thai=$_POST["trangthai"];
	$query="UPDATE `loai_baiviet` SET `ten_loai`='$ten_loai',`mota`='$mota',`trangthai`='$trang_thai'  WHERE id_loai='$id_loai'";
	$result=mysqli_query($con,$query) or die ("LOI CAP NHAT: ".mysqli_error($con));
	if($result){
		header("Location: ql_loaibaiviet.php");
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Cật nhập loại bài viết</title>
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
	$query1="SELECT * FROM loai_baiviet WHERE id_loai='$id_loai'";
	$result1=mysqli_query($con,$query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
	$rows=mysqli_fetch_array($result1, MYSQLI_ASSOC);
?>
		<h1>Cật nhập loại bài viết</h1>
		<div class="table_thuonghieu">
			<form <?php echo 'action="ql_loaibaiviet_capnhat.php?id_loai='.$rows['id_loai'].'"'?> method="post">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Tên loại bài viết:</td>
						<td><input type="text" name="ten_loai" value="<?php echo $rows['ten_loai'] ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Mô tả:</td>
						<td><input type="text" name="mota" value="<?php echo $rows['mota'] ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Trạng thái:</td>
						<td><input type="text" name="trangthai" value="<?php echo $rows['trangthai'] ?>"></td>
					</tr>
					<tr>
						<td colspan="2" class="button_thuonghieu">
							<input type="submit" name="save" value="Lưu">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
