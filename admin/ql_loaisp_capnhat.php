<?php
include_once "../models/connect.php";
$id_loaisp = $_REQUEST["id_loaisp"];
if(isset($_POST["save"])){
	$ten_loaisp=$_POST["ten_loaisp"];
	$mota=$_POST["mota"];
	$trang_thai=$_POST["trangthai"];
	$date = date('Y-m-d-h-i-s');
	$hinh = $_FILES["images"]["name"];
	if($hinh != ""){
		$uploaddir = "../images/uploaded/";
		$uploadfile = $date."_".basename($hinh);
		move_uploaded_file($_FILES["images"]["tmp_name"], $uploaddir.$uploadfile);
		$hinh = "../images/uploaded/".$date."_".basename($hinh);
	}
	$query="UPDATE `loaisp` SET `ten_loaisp`='$ten_loaisp',`mota`='$mota',`trangthai`='$trang_thai', `hinh_anh`='$hinh' WHERE id_loaisp='$id_loaisp'";
	$result=mysqli_query($con,$query) or die ("LOI CAP NHAT: ".mysqli_error($con));
	if($result){
		header("Location: ql_loaisp.php");
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Cật nhập loại sản phẩm</title>
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
	$query1="SELECT * FROM loaisp WHERE id_loaisp='$id_loaisp'";
	$result1=mysqli_query($con,$query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
	$rows=mysqli_fetch_array($result1, MYSQLI_ASSOC);
?>
		<h1>Cật nhập loại sản phẩm</h1>
		<div class="table_thuonghieu">
			<form <?php echo 'action="ql_loaisp_capnhat.php?id_loaisp='.$rows['id_loaisp'].'"'?> method="post" enctype="multipart/form-data">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Tên loại sản phẩm:</td>
						<td><input type="text" name="ten_loaisp" value="<?php echo $rows['ten_loaisp'] ?>"></td>
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
						<td class="title_thuonghieu">Hình ảnh</td>
						<td><input type="file" name="images"></td>
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
