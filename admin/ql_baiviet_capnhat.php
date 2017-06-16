<?php
session_start();
include_once "../models/connect.php";
$id_baiviet = $_REQUEST["id_baiviet"];
if(isset($_POST["save"])){
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
	if(strlen($tieude)==0 || strlen($noidung)==0 || strlen($nd_chinh)==0) {
		$msg="Bạn chưa nhập đầy đủ thông tin";
		$check = false;
	}
	if($check){
		if($hinh != "") {
			$query = "UPDATE `baiviet` SET `id_loai`='$id_loai',`tieude`='$tieude',`nd_chinh`='$nd_chinh',
  					`noidung`='$noidung',`hinh_anh`='$hinh',`trangthai`='$trangthai' 
  					WHERE id_baiviet='$id_baiviet'";
		} else {
			$query="UPDATE `baiviet` SET `id_loai`='$id_loai',`tieude`='$tieude',`nd_chinh`='$nd_chinh',
  					`noidung`='$noidung',`trangthai`='$trangthai' 
  					WHERE id_baiviet='$id_baiviet'";
		}
		$result=mysqli_query($con,$query) or die ("LOI CAP NHAT: ".mysqli_error($con));
		if($result){
			header("Location: ql_baiviet.php");
		}
  	}
}
}
?>
<!doctype html>
<html>
<head>
	<title>Cật nhập bài viết</title>
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
	$query1="SELECT * FROM baiviet WHERE id_baiviet='$id_baiviet'";
	$result1=mysqli_query($con,$query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
	$rows=mysqli_fetch_array($result1, MYSQLI_ASSOC);
?>
		<h1>Cật nhập bài viết</h1>
		<div class="table_thuonghieu">
			<form <?php echo 'action="ql_baiviet_capnhat.php?id_baiviet='.$rows['id_baiviet'].'"'?> method="post" enctype="multipart/form-data">
				<table cellpadding="12">
					<tr>
						<td class="title_thuonghieu">Loại bài viết:</td>
						<td>
							<select name="id_loai">
								<?php
									$query4 = "SELECT * FROM loai_baiviet";
									$result4 = mysqli_query($con, $query4) or die ("LOI TRUY VAN: ".mysqli_error($con));
									while($rows4=mysqli_fetch_array($result4,MYSQLI_ASSOC) ){
										if($rows4['id_loai']==$rows['id_loai']) $selected = "selected";
										else
											$selected = "";
										echo '<option value="'.$rows4['id_loai'].'"'.$selected.'>'.$rows4['ten_loai'].'</option>';
									}
								?>
							</select>
						</td>
					</tr>
          <tr>
            <td class="title_thuonghieu">Tiêu đề bài viết:</td>
            <td><input type="text" name="tieude" value="<?php echo $rows['tieude']; ?>"></td>
          </tr>
          <tr>
            <td class="title_thuonghieu">Hình ảnh:</td>
            <td><input type="file" name="images" value="<?php echo $rows['hinh_anh']; ?>"></td>
          </tr>
          <tr>
            <td class="title_thuonghieu">Trạng thái:</td>
            <td><input type="text" name="trangthai" value="<?php echo $rows['trangthai']; ?>"></td>
          </tr>
          <tr>
            <td class="title_thuonghieu">Nội dung chính:</td>
            <td><input type="text" name="nd_chinh" value="<?php echo $rows['nd_chinh']; ?>"></td>
          </tr>
          <tr>
            <td class="title_thuonghieu">Nội dung:</td>
            <td><textarea type="text" name="noidung"><?php echo $rows['noidung']; ?></textarea></td>
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
