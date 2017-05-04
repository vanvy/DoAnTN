<?php
include_once "../models/connect.php";
$id_dsp = $_REQUEST["id_dsp"];
if(isset($_POST["save"])){
	$id_loaisp=$_POST["id_loaisp"];
	$ten_dsp=$_POST["ten_dsp"];
	$mota=$_POST["mota"];
	$trang_thai=$_POST["trangthai"];
	$query="UPDATE `dong_sp` SET `id_loaisp`='$id_loaisp',`ten_dsp`='$ten_dsp',`mota`='$mota',`trangthai`='$trang_thai' WHERE id_dsp='$id_dsp'";
	$result=mysqli_query($con,$query) or die ("LOI CAP NHAT: ".mysqli_error($con));
	if($result){
		header("Location: ql_dongsp.php");
	}
}
?>
<!doctype html>
<html>
<head>
	<title>Cật nhập dòng sản phẩm</title>
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
	$query1="SELECT * FROM dong_sp WHERE id_dsp='$id_dsp'";
	$result1=mysqli_query($con,$query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
	$rows=mysqli_fetch_array($result1, MYSQLI_ASSOC);
?>
		<h1>Cật nhập dòng sản phẩm</h1>
		<div class="table_thuonghieu">
			<form <?php echo 'action="ql_dongsp_capnhat.php?id_dsp='.$rows['id_dsp'].'"'?> method="post">
				<table cellpadding="12">
					<tr>
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
						<td class="title_thuonghieu">Tên dòng sản phẩm:</td>
						<td><input type="text" name="ten_dsp" value="<?php echo $rows['ten_dsp'] ?>"></td>
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
