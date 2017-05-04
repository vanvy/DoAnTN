<?php
	require_once "../view/check.php";
	$id_user=$_REQUEST["id_user"];
	if(isset($_POST["save"])){
		$hoten=$_POST["name"];
		$ngay=$_POST["ngay"];
		$thang=$_POST["thang"];
		$nam=$_POST["nam"];
		$dia_chi=$_POST["dia_chi"];
		$email=$_POST["email"];
		$sdt=$_POST["phone"];
		$hinh= $_FILES["images"]["name"];
			if($hinh != ""){
				$uploaddir = "../images/uploaded/";
				$uploadfile = $date."_".basename($hinh);
				move_uploaded_file($_FILES["images"]["tmp_name"], $uploaddir.$uploadfile);
				$hinh = "../images/uploaded/".$date."_".basename($hinh);
			}
		$query="UPDATE `user` SET `hoten`='$hoten',`ngay`='$ngay',`thang`='$thang',`nam`='$nam',`dia_chi`='$dia_chi',`email`='$email',`sdt`='$sdt',`hinh_dh`='$hinh' WHERE id_user='$id_user'";
		$result=mysqli_query($con,$query) or die("LOI CAP NHAT: ".mysqli_error($con));
			if($result){
				header('Location: ql_users.php');
			}
	}
?>
<!doctype html>
<html>
<head>
	<title>Sửa thông tin</title>
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
	<!-- main content -->
	<div id="content">
		<h1>Nhập lại thông tin</h1>
		<?php
			$query1="SELECT * FROM user WHERE id_user='$id_user'";
			$result1=mysqli_query($con, $query1) or die("LOI HIEN THI: ".mysqli_error($con));
			$rows=mysqli_fetch_array($result1, MYSQLI_ASSOC);
		?>
		<div class="account">
			<form <?php echo 'action="ql_users_capnhat.php?id_user='.$rows['id_user'].'"'?> method="post" enctype="multipart/form-data">
				<table cellspacing="12">
					<tr>
						<td class="title_account">Họ và tên:</td>
						<td><input type="text" name="name" value="<?php echo $rows['hoten']; ?>"></td>
					</tr>
					<tr>
						<td class="title_account">Ngày sinh:</td>
						<td>
							<select name="ngay">
								<option value="0">Ngày</option>
								<?php
									$ngay=range(1,31);
									foreach($ngay as $value){
										if($rows['ngay']==$value) $selected="selected";
										else $selected="";
											echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>';
									}
								?>
							</select>
							<select name="thang">
								<option value="0">Tháng</option>
								<?php
									$thang=range(1,12);
									foreach($thang as $value){
										if($rows['thang']==$value) $selected="selected";
										else $selected="";
											echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>';
									}
								?>
							</select>
							<select name="nam">
								<option value="0">Năm</option>
								<?php
									$current_year = date('Y');
									$min_year = $current_year-80;
									$max_year = $current_year-13;
									$nam=range($min_year,$max_year);
									foreach($nam as $value){
										if($rows['nam']==$value) $selected="selected";
										else $selected="";
											echo '<option value="'.$value.'"'.$selected.'>'.$value.'</option>';
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="title_account">Địa chỉ:</td>
						<td><input type="text" name="dia_chi" value="<?php echo $rows['dia_chi']; ?>"></td>
					</tr>
					<tr>
						<td class="title_account">Email:</td>
						<td><input type="text" name="email" value="<?php echo $rows['email']; ?>"></td>
					</tr>
					<tr>
						<td class="title_account">Số điện thoại:</td>
						<td><input type="text" name="phone" value="<?php echo $rows['sdt']; ?>"></td>
					</tr>
					<tr>
						<td class="title_account">Hình đại diện:</td>
						<td>
							<input type="file" name="images" value="<?php echo $rows['hinhdh']; ?>">
						</td>
					</tr>
					<tr>
						<td colspan="2" class="button_cap_nhat">
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
