<?php
  require_once "../view/check.php";
  $id_user = $_REQUEST['id_user'];
  $query = "DELETE FROM user WHERE id_user='$id_user'";
  mysqli_query($con,$query) or die ("LOI XOA: ".mysqli_error($con));
  header("Location: ql_users.php");
?>
