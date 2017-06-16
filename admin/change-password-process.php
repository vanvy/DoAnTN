<?php
  require_once "../view/check.php";

  if(isset($_POST['save'])) {
    $idUser = $_POST['id'];
    $query = "SELECT * FROM user WHERE id_user=".$idUser;
    echo $query;
    $result = mysqli_query($con, $query) or die ("ERROR SELECT USER: ".mysqli_error($con));
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $password = $row['pass'];

    $oldPwd = $_POST['pass'];
    $salt = "@VietName#!123";
    $oldPwd = crypt($oldPwd,$salt);
    echo "<br/>".$oldPwd;
    $newPwd = $_POST['new_pass'];
    $rePwd = $_POST['re-pass'];
    if($password == $oldPwd) {
      if(($newPwd == $rePwd) && (strlen($newPwd)>=6)) {
        $newPwd = crypt($newPwd, $salt);
        $query1 = "UPDATE user SET pass='$newPwd' WHERE id_user=".$idUser;
        $result1 = mysqli_query($con, $query1) or die ("ERROR CHANGE PASSWORD: ".mysqli_error($con));
        if($result1) {
          $msg = "Đổi mật khẩu thành công!";
          $_SESSION['pwd'] = $newPwd;
        } else {
          $msg = "Đã xảy ra lỗi! Đổi mật khẩu không thành công!";
        }
      } else {
        $msg = "Vui lòng nhập mật khẩu mới hợp lệ!";
      }
    } else {
      $msg = "Vui lòng nhập đúng mật khẩu cũ!";
    }
   }

   header("Location: change_password.php?msg=".$msg);
?>