<?php
include_once "../models/connect.php";
if(isset($_POST["submit"])){
	$name_th=$_POST["name_th"];
	$xuat_xu=$_POST["xuat_xu"];
	$mo_ta=$_POST["mo_ta"];
	$trang_thai=$_POST["trang_thai"];
	$check=true;
	if(strlen($name_th)==0 || strlen($xuat_xu)==0 || strlen($trang_thai)==0){
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check=false;
	}
	 if($check){
		$query = "INSERT INTO `thuong_hieu`(`ten_th`, `xuat_xu`, `mota`, `trangthai`)
			  VALUES ('$name_th','$xuat_xu','$mo_ta','$trang_thai')";
		$result = mysqli_query($con,$query) or die ("LOI THEM MOI: ".mysqli_error($con));
		if($result){
			header("Location: ql_thuonghieu.php");
		}
	}
}
?>

<!doctype html>
<html>
<head>
	<title>Thêm mới thương hiệu</title>
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
		<h1>Thêm mới thương hiệu</h1>
		<div class="table_thuonghieu">
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Tên thương hiệu:</td>
						<td><input type="text" name="name_th"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Xuất xứ:</td>
						<td><input type="text" name="xuat_xu"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Mô tả:</td>
						<td><input type="text" name="mo_ta"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Trạng thái:</td>
						<td><input type="text" name="trang_thai"></td>
					</tr>
					<tr>
						<td colspan="2" class="button_thuonghieu">
							<input type="submit" name="submit" value="Lưu">
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
