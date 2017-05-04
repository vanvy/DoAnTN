<?php
	include_once "../models/connect.php";
	$id_dsp=$_REQUEST['id_dsp'];
	$query="DELETE FROM dong_sp WHERE id_dsp='$id_dsp'";
	mysqli_query($con,$query) or die ("LOI XOA: ". mysqli_error($con));
	header("Location: ql_dongsp.php");
?>
