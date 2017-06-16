<?php
include_once "../models/connect.php";
if(isset($_POST["btnsubmit"])){
	$hoten = $_POST["name"];
	$ngay = $_POST["day"];
	$thang = $_POST["month"];
	$nam = $_POST["year"];
	$email = $_POST["email"];
	$sdt = $_POST["phone"];
	$diachi = $_POST["address"];
	$date = date('Y-m-d-h-i-s');
	// Ma hoa passworld
	$pass = $_POST["pass"];
	$salt = "@VietName#!123";
	$mahoa = crypt($pass,$salt);

	$hinh = $_FILES["image"]["name"];
	if($hinh != ""){
		$uploaddir = "../images/uploaded/";
		$uploadfile = $date."_".basename($hinh);
		move_uploaded_file($_FILES["image"]["tmp_name"], $uploaddir.$uploadfile);
		$hinh = "../images/uploaded/".$date."_".basename($hinh);
	}
	$check = true;
	if(strlen($hoten||$email||$pass||$sdt||$diachi)==0){
		$error = "Bạn chưa điền đầy đủ thông tin";
		$check = false;
	}
	if($check){
		$phanquyen = "Member";
		$query = "INSERT INTO `user`(`hoten`, `ngay`, `thang`, `nam`, `dia_chi`, `sdt`, `email`, `pass`, `hinh_dh`, `phanquyen`)
		      VALUES ('$hoten','$ngay','$thang','$nam','$diachi','$sdt','$email','$mahoa','$hinh','$phanquyen')";
		$result = mysqli_query($con,$query) or die("LOI THEM MOI: ".mysqli_error($con));
		if($result){
			header("Location: login.php");
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tiva Shop</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/mainIndex.css" />
  <link rel="stylesheet" href="../style/main.css" />
</head>
<body>
<div id="container">
  <?php
    include_once 'header.php';
  ?>
  <?php
    include_once 'menu.php';
   ?>
  <div id="sale-off">
    <a href="sale.php"><p>KHUYẾN MÃI</p></a>
  </div>
  <div id="content">
    <div class="register">
      <div class="registerContent">
        <h3>Đăng ký</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Họ tên <span class="point">(*)</span></td>
              <td>
                <input type="text" name="name" />
              </td>
            </tr>
            <tr>
              <td>Ngày sinh <span class="point">(*)</span></td>
              <td>
                <select name="day">
                	<option value="0">Ngày</option>
                	<?php
                		for($i=1; $i<=31; $i++){
                			echo '<option value="'.$i.'">'.$i.'</option>';
                		}
                	?>
                </select>
                <select name="month">
                	<option value="0">Tháng</option>
                	<?php
                		$thang=1;
                		while($thang<13){
                			echo '<option value="'.$thang.'">'.$thang.'</option>';
                			$thang++;
                		}
                	?>
                </select>
                <select name="year">
                	<option value="0">Năm</option>
                	<?php
                		$namht=date('Y');
                		$maxt=$namht-80;
                		$mint=$namht-13;
                		for($i=$maxt; $i<=$mint; $i++){
                			echo '<option value='.$i.'>'.$i.'</option>';
                		}
                	?>
                </select>
              </td>
            </tr>
            <tr>
              <td>Địa chỉ <span class="point">(*)</span></td>
              <td>
                <input type="text" name="address" />
              </td>
            </tr>
            <tr>
              <td>Số điện thoại <span class="point">(*)</span></td>
              <td>
                <input type="text" name="phone" />
              </td>
            </tr>
            <tr>
              <td>Email <span class="point">(*)</span></td>
              <td>
                <input type="text" name="email" />
              </td>
            </tr>
            <tr>
              <td>Mật khẩu <span class="point">(*)</span></td>
              <td>
                <input type="password" name="pass" />
              </td>
            </tr>
            <tr>
              <td>Hình đại diện </td>
              <td>
                <input type="file" name="image" />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <span class="notification">
                  <?php
                    if(isset($error)) echo $error;
                    if(isset($msg)) echo $msg;
                  ?>
                </span>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="bntRegister">
                  <input type="reset" value="Hủy">
                  <input type="submit" name="btnsubmit" value="Đăng ký">
                </div>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="favorable">
        <span class="titleFavorable">Chương trình ưu đãi của thành viên</span>
        <ul>
          <li>Ưu đãi 1</li>
          <li>Ưu đãi 2</li>
          <li>Ưu đãi 3</li>
          <li>Ưu đãi 4</li>
          <li>Ưu đãi 5</li>
        </ul>
      </div>
    </div>
  </div>
  <?php
    include_once 'footer.php';
  ?>
</div>
</body>
</html
