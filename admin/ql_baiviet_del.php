<?php
	include_once "../models/connect.php";
	$id_baiviet=$_REQUEST['id_baiviet'];
	$query="DELETE FROM baiviet WHERE id_baiviet='$id_baiviet'";
	mysqli_query($con,$query) or die ("LOI XOA: ". mysqli_error($con));
	header("Location: ql_baiviet.php");
?>
