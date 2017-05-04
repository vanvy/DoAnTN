<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$con = mysqli_connect("localhost", "root", "C343811", "tivashop");
	// if(!isset($con))
	// 	echo "Kết nối không thành công!";
	if(mysqli_connect_errno())
		echo "Ket noi that bai: ".mysqli_connect_error();
?>
