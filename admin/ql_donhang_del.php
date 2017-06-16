<?php
  require_once "../view/check.php";
  // lay id_kh, id_hd
  $idHd = $_REQUEST['id_hd'];
  $idKh = $_REQUEST['id_kh'];

  // xoa khach hang
  $query = "DELETE FROM khachhang WHERE id_kh=".$idKh;
  $result = mysqli_query($con, $query) or die ("ERROR DELETE KHACH HANG: ".mysqli_error($con));

  // xoa chi tiet hoa don
  if($result) {
    $query1 = "DELETE FROM chitiethd WHERE id_hd=".$idHd;
    $result1 = mysqli_query($con, $query1) or die ("ERROR DELETE CTHD: ".mysqli_error($con));

    // xoa hoa don
    if($result1) {
      $query2 = "DELETE FROM hoadon WHERE id_hd=".$idHd;
      $result2 = mysqli_query($con, $query2) or die ("ERROR DELETE HOA DON: ".mysqli_error($con));
      if($result2) {
        $msg = "Xóa đơn hàng thành công";
      }
    } else {
      $msg = "Đã xảy ra lỗi, xóa đơn hàng KHÔNG thành công!";
    }
  } else {
    $msg = "Đã xảy ra lỗi, xóa đơn hàng KHÔNG thành công!";
  }
  header("Location: ql_donhang.php?msg=$msg");
?>