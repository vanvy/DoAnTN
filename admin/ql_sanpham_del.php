<?php
	include_once "../models/connect.php";
	$id_sp = $_REQUEST['id_sp'];
	$query = "DELETE FROM sanpham WHERE id_sp='$id_sp'";
	mysqli_query($con,$query) or die ("LOI XOA: ". mysqli_error($con));
	header("Location: ql_sanpham.php");
?>
