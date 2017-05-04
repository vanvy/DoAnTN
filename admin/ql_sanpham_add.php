<?php
include_once "../models/connect.php";
if(isset($_POST["btnsubmit"])){
	$tensp=$_POST["ten_sp"];
	$ma_sp=$_POST["ma_sp"];
	$id_dsp=$_POST["id_dsp"];
	$id_th=$_POST["id_th"];
	$id_loaisp=$_POST["id_loaisp"];
	$dgia=$_POST["gia_sp"];
	$dung_luong=$_POST["dung_luong"];
	$xuat_xu=$_POST["xuat_xu"];
	$mota_chitiet=$_POST["mota_chitiet"];
	$trangthai=$_POST["trangthai"];
	$soluong=$_POST['soluong'];
	$date = date('Y-m-d-h-i-s');
	$hinh = $_FILES["images"]["name"];
	$sale="";
	if($hinh != ""){
		$uploaddir = "../images/uploaded/";
		$uploadfile = $date."_".basename($hinh);
		move_uploaded_file($_FILES["images"]["tmp_name"], $uploaddir.$uploadfile);
		$hinh = "../images/uploaded/".$date."_".basename($hinh);
	}
	$check=true;
	if(strlen($tensp)==0 || strlen($dgia)==0 || strlen($dung_luong)==0 || strlen($xuat_xu)==0 || strlen($trangthai)==0){
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check=false;
	}
	if($check){
		$query = "INSERT INTO `sanpham`(`id_dsp`, `id_th`, `id_loaisp`, `ma_sp`, `ten_sp`, `gia_sp`, `soluong`, `dung_luong`, `xuat_xu`, `trangthai`, `hinh_anh`, `mota_chitiet`, `sale`)
				  VALUES ('$id_dsp','$id_th','$id_loaisp','$ma_sp','$tensp','$dgia','$soluong','$dung_luong','$xuat_xu','$trangthai','$hinh','$mota_chitiet','$sale')";
		$result = mysqli_query($con,$query) or die ("LOI THEM MOI: ".mysqli_error($con));
			if($result){
				header("Location: ql_sanpham.php");
			}
	}
}
?>
<!Doctype html>
<html>
<head>
	<title>Thêm mới sản phẩm</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style/main_admin1.css">
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
		<h1>Thêm mới sản phẩm</h1>
		<div class="table_thuonghieu">
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
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
						<td class="title_thuonghieu">Số lượng</td>
						<td><input type="number" name="soluong"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Dòng sản phẩm:</td>
						<td>
							<select name="id_dsp">
								<?php
								$query1 = "SELECT * FROM dong_sp";
								$result = mysqli_query($con,$query1) or die("LOI TRUY VAN DSP: ".mysqli_error($con));
								while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
									echo '<option value="'.$rows['id_dsp'].'">'.$rows['ten_dsp'].'</option>';
								}
							?>
							</select>
						</td>
						<td class="title_thuonghieu">Đơn giá:</td>
						<td><input type="number" name="gia_sp"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Thương hiệu:</td>
						<td>
							<select name="id_th">
								<?php
									$query2 = "SELECT * FROM thuong_hieu";
									$result = mysqli_query($con,$query2) or die("LOI TRUY VAN TH: ".mysqli_error($con));
									while($rows1=mysqli_fetch_array($result,MYSQLI_ASSOC)){
										echo '<option value="'.$rows1['id_th'].'">'.$rows1['ten_th'].'</option>';
									}
								?>
							</select>
						</td>
						<td class="title_thuonghieu">Dung lượng:</td>
						<td><input type="text" name="dung_luong"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Mã sản phẩm:</td>
						<td><input type="text" name="ma_sp"></td>
						<td class="title_thuonghieu">Xuất xứ:</td>
						<td><input type="text" name="xuat_xu"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Tên sản phẩm:</td>
						<td><input type="text" name="ten_sp"></td>
						<td class="title_thuonghieu">Trạng thái:</td>
						<td><input type="text" name="trangthai"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Mô tả chi tiết:</td>
						<td><input type="text" name="mota_chitiet"></td>
						<td class="title_thuonghieu">Hình ảnh</td>
						<td><input type="file" name="images"></td>
					</tr>
					<tr>
						<td colspan="4" class="button_sp">
							<input type="submit" name="btnsubmit" value="Lưu">
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
