<?php
include_once "../models/connect.php";
$id_th = $_REQUEST["id_th"];
if(isset($_POST["save"])){
	$ten_th = $_POST["ten_th"];
	$xuat_xu = $_POST["xuat_xu"];
	$mota = $_POST["mo_ta"];
	$trangthai = $_POST["trang_thai"];
	$query = "UPDATE `thuong_hieu` SET `ten_th`='$ten_th',`mota`='$mota',`trangthai`='$trangthai',`xuat_xu`='$xuat_xu' WHERE id_th='$id_th'";
	$result = mysqli_query($con,$query) or die ("LOI CAP NHAT: ".mysqli_error($con));
	if($result){
		header("Location: ql_thuonghieu.php");
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Cập nhật thương hiệu</title>
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
	$query1 = "SELECT * FROM thuong_hieu WHERE id_th = '$id_th'";
	$result1 = mysqli_query($con,$query1) or die ("LOI CAP NHAT: ".mysqli_error($con));
	$rows = mysqli_fetch_array($result1, MYSQLI_ASSOC);
?>	
		<h1>Cập nhật thương hiệu</h1>
		<div class="table_thuonghieu">
			<form <?php echo 'action="ql_thuonghieu_capnhat.php?id_th='.$rows['id_th'].'"' ?> method="post">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Tên thương hiệu:</td>
						<td><input type="text" name="ten_th" value="<?php echo $rows['ten_th']; ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Xuất xứ:</td>
						<td><input type="text" name="xuat_xu" value="<?php echo $rows['xuat_xu']; ?>" method="post"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Mô tả:</td>
						<td><input type="text" name="mo_ta" value="<?php echo $rows['mota']; ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Trạng thái:</td>
						<td><input type="text" name="trang_thai" value="<?php echo $rows['trangthai']; ?>"></td>
					</tr>
					<tr>
						<td colspan="2" class="button_thuonghieu">
							<input type="submit" name="save" value="Lưu">
							<input type="reset" value="Hủy">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>