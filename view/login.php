<?php
	session_start();
	require_once "../models/user.php";
	if(isset($_POST['btnsubmit'])){
		$email 	= $_POST['email'];
		$pwd 	= $_POST['pwd'];
		$salt = "@VietName#!123";
		$mahoa = crypt($pwd,$salt);

		$result = user::checkUserLogin($email, $mahoa);
		$rows 	= mysqli_fetch_array($result, MYSQLI_ASSOC);

		$num 	= mysqli_num_rows($result);
		if($num>0){
			$_SESSION['id_user']	=	$rows['id_user'];
			$_SESSION['user-name'] 	=	$rows['hoten'];
			$_SESSION['email'] 		=	$email;
			$_SESSION['pwd']		=	$rows['pass'];
			$_SESSION['level'] 		=	$rows['phanquyen'];
      $_SESSION['avatar'] = $rows['hinh_dh'];
			$un = $rows['hoten'];
			if($rows['phanquyen']=='Admin'){
				$msg = "Đăng nhập thành công!";
				header("Location: ../admin/index.php");
			}
			else{
				//header("Location: index.php");
        echo $_SESSION['user-name'];

			}

		}
		else{
			$msg = "Đăng nhập không thành công. Xin vui lòng kiểm tra lại tài khoản và mật khẩu của bạn.";
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
        <h3>Đăng nhập</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <table>
            <tr>
              <td>Email <span class="point">(*)</span></td>
              <td>
                <input type="text" name="email" />
              </td>
            </tr>
            <tr>
              <td>Mật khẩu <span class="point">(*)</span></td>
              <td>
                <input type="password" name="pwd" />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="bntRegister btnlogin">
                  <input type="reset" value="Hủy">
                  <input type="submit" name="btnsubmit" value="Đăng nhập">
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
