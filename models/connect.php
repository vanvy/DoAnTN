<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$con = mysqli_connect("localhost", "root", "12345", "tivashop");
	// if(!isset($con))
	// 	echo "Kết nối không thành công!";
	if(mysqli_connect_errno())
		echo "Ket noi that bai: ".mysqli_connect_error();

  // Change character set to utf8
  //mysqli_set_charset($con, "utf8");
?>
