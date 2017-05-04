<?php
include_once "../models/connect.php";
if(isset($_POST["submit"])){
	$id_loai=$_POST["id_loai"];
	$tieude=$_POST["tieude"];
	$nd_chinh=$_POST["nd_chinh"];
	$noidung=$_POST["noidung"];
	$trangthai=$_POST["trangthai"];
	$date = date('Y-m-d-h-i-s');
	$hinh = $_FILES["images"]["name"];
	if($hinh != ""){
		$uploaddir = "../images/uploaded/";
		$uploadfile = $date."_".basename($hinh);
		move_uploaded_file($_FILES["images"]["tmp_name"], $uploaddir.$uploadfile);
		$hinh = "../images/uploaded/".$date."_".basename($hinh);
	}
	$check=true;
	if(strlen($tieude)==0 || strlen($noidung)==0 || strlen($nd_chinh)==0){
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check=false;
	}
	if($check){
		$query = "INSERT INTO `baiviet`(`id_loai`, `tieude`, `nd_chinh`, `noidung`, `hinh_anh`,`trangthai`)
			 VALUES ('$id_loai','$tieude','$nd_chinh','$noidung','$hinh','$trangthai')";
		$result = mysqli_query($con,$query) or die ("LOI THEM MOI: ".mysqli_error($con));
		if($result){
			header("Location: ql_baiviet.php");
		}
	}
}
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
		<h1>Thêm mới bài viết</h1>
		<div class="table_thuonghieu">
				<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post"  enctype="multipart/form-data">
					<table cellpadding="12">
						<tr>
							<td class="title_thuonghieu">Loại bài viết:</td>
							<td>
								<select name="id_loai">
									<?php
									$query1 = "SELECT * FROM loai_baiviet";
									$result = mysqli_query($con,$query1) or die("LOI TRUY VAN DSP: ".mysqli_error($con));
									while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
										echo '<option value="'.$rows['id_loai'].'">'.$rows['ten_loai'].'</option>';
									}
								?>
								</select>
							</td>
						</tr>
						<tr>
							<td class="title_thuonghieu">Tiêu đề bài viết:</td>
							<td><input type="text" name="tieude"></td>
						</tr>
						<tr>
							<td class="title_thuonghieu">Hình ảnh:</td>
							<td><input type="file" name="images"></td>
						</tr>
						<tr>
							<td class="title_thuonghieu">Trạng thái:</td>
							<td><input type="text" name="trangthai"></td>
						</tr>
						<tr>
							<td class="title_thuonghieu">Nội dung chính:</td>
							<td><input type="text" name="nd_chinh"></td>
						</tr>
						<tr>
							<td class="title_thuonghieu">Nội dung:</td>
							<td><textarea type="text" name="noidung"></textarea></td>
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
