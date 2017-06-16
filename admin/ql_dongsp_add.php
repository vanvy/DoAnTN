<?php
include_once "../models/connect.php";
if(isset($_POST["submit"])){
	$id_loaisp=$_POST["id_loaisp"];
	$dongsp=$_POST["ten_dsp"];
	$mota=$_POST["mo_ta"];
	$trang_thai=$_POST["trang_thai"];
	$check=true;
	if(strlen($dongsp)==0 || strlen($trang_thai)==0){
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check=false;
	}
	if($check){
		$query = "INSERT INTO `dong_sp`(`id_loaisp`, `ten_dsp`, `mota`, `trangthai`)
			 VALUES ('$id_loaisp','$dongsp','$mota','$trang_thai')";
		$result = mysqli_query($con,$query) or die ("LOI THEM MOI: ".mysqli_error($con));
		if($result){
			header("Location: ql_dongsp.php");
		}
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Thêm mới dòng sản phẩm</title>
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
		<h1>Thêm mới dòng sản phẩm</h1>
		<div class="table_thuonghieu">
			<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Loại sản phẩm:</td>
						<td>
							<select name="id_loaisp">
								<?php
								$query1 = "SELECT * FROM loaisp";
								$result = mysqli_query($con,$query1) or die("LOI TRUY VAN DSP: ".mysqli_error($con));
								while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
									echo '<option value="'.$rows['id_loaisp'].'">'.$rows['ten_loaisp'].'</option>';
								}
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Tên dòng sản phẩm:</td>
						<td><input type="text" name="ten_dsp"></td>
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
