<?php
	include_once "../models/connect.php";
	$id_loai=$_REQUEST['id_loai'];
	$query="DELETE FROM loai_baiviet WHERE id_loai='$id_loai'";
	mysqli_query($con,$query) or die ("LOI XOA: ". mysqli_error($con));
	header("Location: ql_loaibaiviet.php");
?>
