<?php
	include_once "../models/connect.php";
	$id_th = $_REQUEST['id_th'];
	$query = "DELETE FROM thuong_hieu WHERE id_th='$id_th'";
	mysqli_query($con,$query) or die ("LOI XOA: ". mysqli_error($con));
	header("Location: ql_thuonghieu.php");
?>
