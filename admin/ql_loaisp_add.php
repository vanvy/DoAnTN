<?php
include_once "../models/connect.php";
if(isset($_POST["submit"])){
	$loaisp=$_POST["ten_loaisp"];
	$mota=$_POST["mo_ta"];
	$trang_thai=$_POST["trang_thai"];
	$date = date('Y-m-d-h-i-s');
	$hinh = $_FILES["images"]["name"];
	if($hinh != ""){
		$uploaddir = "../images/uploaded/";
		$uploadfile = $date."_".basename($hinh);
		move_uploaded_file($_FILES["images"]["tmp_name"], $uploaddir.$uploadfile);
		$hinh = "../images/uploaded/".$date."_".basename($hinh);
	}
	$check=true;
	if(strlen($loaisp)==0 || strlen($trang_thai)==0){
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check=false;
	}
	if($check){
		$query = "INSERT INTO `loaisp`(`ten_loaisp`, `mota`, `trangthai`,`hinh_anh`)
			 VALUES ('$loaisp','$mota','$trang_thai','$hinh')";
		$result = mysqli_query($con,$query) or die ("LOI THEM MOI: ".mysqli_error());
		if($result){
			header("Location: ql_loaisp.php");
		}
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Thêm mới loại sản phẩm</title>
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
		<h1>Thêm mới loại sản phẩm</h1>
		<div class="table_thuonghieu">
			<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Tên loại sản phẩm:</td>
						<td><input type="text" name="ten_loaisp"></td>
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
						<td class="title_thuonghieu">Hình ảnh</td>
						<td><input type="file" name="images"></td>
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
