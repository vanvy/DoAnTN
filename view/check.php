<?php
	session_start();
	require_once "../models/user.php";
	if(isset($_SESSION['id_user']) && isset($_SESSION['email']) && isset($_SESSION['pwd'])){
		$result = user::checkUserLogin($_SESSION['email'], $_SESSION['pwd']);
		$rows = mysqli_fetch_array($result);
		$num = mysqli_num_rows($result);
		if($num==1){
			$level = $rows['phanquyen'];
			$fullname = $rows['hoten'];
			$id_user = $rows['id_user'];
			$email = $_SESSION['email'];
			$avatar = $rows['hinh_dh'];
		}
	}
	else{
		header("Location: ../view/login.php");
	}
?>
