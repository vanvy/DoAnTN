<?php
	include_once "../models/connect.php";
	$id_loaisp=$_REQUEST['id_loaisp'];
	$query="DELETE FROM loaisp WHERE id_loaisp='$id_loaisp'";
	mysqli_query($con,$query) or die ("LOI XOA: ". mysqli_error($con));
	header("Location: ql_loaisp.php");
?>
