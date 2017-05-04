<?php
include_once "../models/connect.php";
	$id_sp=$_REQUEST['id_sp'];
if(isset($_POST["submit"])){
	$ten_sp=$_POST["ten_sp"];
	$ma_sp=$_POST["ma_sp"];
	$id_dsp=$_POST["id_dsp"];
	$id_th=$_POST["id_th"];
	$id_loaisp=$_POST["id_loaisp"];
	$dgia=$_POST["gia_sp"];
	$dung_luong=$_POST["dung_luong"];
	$xuat_xu=$_POST["xuat_xu"];
	$mota_chitiet=$_POST["mota_chitiet"];
	$trangthai=$_POST["trangthai"];
	$soluong=$_POST["soluong"];
	$sale="";
	$date = date('Y-m-d-h-i-s');
	$hinh = $_FILES["images"]["name"];
	if($hinh != ""){
		$uploaddir = "../images/uploaded/";
		$uploadfile = $date."_".basename($hinh);
		move_uploaded_file($_FILES["images"]["tmp_name"], $uploaddir.$uploadfile);
		$hinh = "../images/uploaded/".$date."_".basename($hinh);
	}
	$check=true;
	if(strlen($ten_sp)==0 || $dgia<=0 || strlen($dung_luong)==0 || strlen($xuat_xu)==0 || strlen($mota_chitiet)==0 || $soluong<=0 || strlen($trangthai)==0){
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check = false;
	}
	if($check){
		$query = "UPDATE `sanpham` SET `id_dsp`='$id_dsp',`id_th`='$id_th',`id_loaisp`='$id_loaisp',`ma_sp`='$ma_sp',
				`ten_sp`='$ten_sp',`gia_sp`='$dgia',`soluong`='$soluong',`dung_luong`='$dung_luong',
				`xuat_xu`='$xuat_xu',`mota_chitiet`='$mota_chitiet',`hinh_anh`='$hinh',
				`trangthai`='$trangthai' WHERE id_sp='$id_sp'";
		$result = mysqli_query($con,$query) or die ("LOI TRUY VAN: ".mysqli_error($con));
		if($result){
			header("Location: ql_sanpham.php");

		}
	}
}

?>
<!doctype html>
<html>
<head>
	<title>Cật nhập sản phẩm</title>
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
		$query1="SELECT * FROM sanpham WHERE id_sp='$id_sp'";
		$result1=mysqli_query($con,$query1) or die ("LOI CAP NHAT: ".mysqli_error($con));
		$rows=mysqli_fetch_array($result1, MYSQLI_ASSOC);
	?>
		<h1>Cập nhật sản phẩm</h1>
		<div class="table_thuonghieu">
		<form <?php echo 'action="ql_sanpham_capnhat.php?id_sp='.$rows['id_sp'].'"';?> method="post" enctype="multipart/form-data">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Dòng sản phẩm:</td>
						<td>
							<select name="id_dsp">
								<?php
									$query2 = "SELECT * FROM dong_sp";
									$result2 = mysqli_query($con, $query2) or die ("LOI TRUY VAN: ".mysqli_error($con));
									while($rows2=mysqli_fetch_array($result2,MYSQLI_ASSOC) ){
										if($rows2['id_dsp']==$rows['id_dsp']) $selected = "selected";
										else
											$selected = "";
										echo '<option value="'.$rows2['id_dsp'].'"'.$selected.'>'.$rows2['ten_dsp'].'</option>';
									}
								?>
							</select>
						</td>
						<td class="title_thuonghieu">Loại sản phẩm:</td>
						<td>
							<select name="id_loaisp">
								<?php
									$query4 = "SELECT * FROM loaisp";
									$result4 = mysqli_query($con, $query4) or die ("LOI TRUY VAN: ".mysqli_error($con));
									while($rows4=mysqli_fetch_array($result4,MYSQLI_ASSOC) ){
										if($rows4['id_loaisp']==$rows['id_loaisp']) $selected = "selected";
										else
											$selected = "";
										echo '<option value="'.$rows4['id_loaisp'].'"'.$selected.'>'.$rows4['ten_loaisp'].'</option>';
									}
								?>
							</select>
						</td>

					</tr>
					<tr>
						<td class="title_thuonghieu">Thương hiệu</td>
						<td>
							<select name="id_th">
								<?php
									$query3 = "SELECT * FROM thuong_hieu";
									$result3 = mysqli_query($con, $query3) or die ("LOI TRUY VAN: ".mysqli_error($con));
									while($rows3=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
										if($rows3['id_th']==$rows['id_th']) $selected = "selected";
										else
											$selected="";
										echo '<option value="'.$rows3['id_th'].'"'.$selected.'>'.$rows3['ten_th'].'</option>';
									}
								?>
							</select>
						</td>
						<td class="title_thuonghieu">Dung lượng:</td>
						<td><input type="text" name="dung_luong" value="<?php echo $rows["dung_luong"] ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Mã sản phẩm</td>
						<td><input type="text" name="ma_sp" value="<?php echo $rows["ma_sp"]; ?>"></td>
						<td class="title_thuonghieu">Xuất xứ:</td>
						<td><input type="text" name="xuat_xu" value="<?php echo $rows["xuat_xu"]; ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Tên sản phẩm:</td>
						<td><input type="text" name="ten_sp" value="<?php echo $rows["ten_sp"]; ?>"></td>
						<td class="title_thuonghieu">Trạng thái:</td>
						<td><input type="text" name="trangthai" value="<?php echo $rows["trangthai"]; ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Đơn giá:</td>
						<td><input type="number" name="gia_sp" value="<?php echo $rows["gia_sp"]; ?>"></td>
						<td class="title_thuonghieu">Mô tả chi tiết:</td>
						<td><input type="text" name="mota_chitiet" value="<?php echo $rows["mota_chitiet"]; ?>"></td>
					</tr>
					<tr>
						<td class="title_thuonghieu">Số lượng:</td>
						<td><input type="number" name="soluong" value="<?php echo $rows["soluong"]; ?>"></td>
						<td class="title_thuonghieu">Hình ảnh</td>
						<td><input type="file" name="images" value="<?php echo $rows["hinh_anh"] ?>"></td>
					</tr>
					<tr>
						<td colspan="4" class="button_sp">
							<input type="submit" name="submit" value="Lưu">
						</td>
						<td>

						</td>
					</tr>
					<tr>
						<td colspan="4" style="text-align: center; font-weight: bold">
							<?php if(isset($msg)) echo $msg; ?>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
