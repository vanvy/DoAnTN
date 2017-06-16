<?php
    session_start();
    require_once "../models/user.php";
    // Kiem tra neu nguoi mau da la thanh vien thi lay thong tin tu database ra
    if(isset($_SESSION['email']) && $_SESSION['pwd']) {
        $email = $_SESSION['email'];
        $pwd = $_SESSION['pwd'];
        $result = user::checkUserLogin($email, $pwd);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $num = mysqli_num_rows($result);
        if($num==1) {
            $hoten = $row['hoten'];
            $dia_chi = $row['dia_chi'];
            $sdt = $row['sdt'];
        }
    }
    if(!isset($_SESSION['cart'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tiva Shop</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/mainIndex.css" />
  <link rel="stylesheet" href="../style/main.css" />
</head>
<body>
<div id="container">
   <?php
    include_once 'header.php';
   ?>
   <?php
    include_once 'menu.php';
   ?>
  <div id="sale-off">
    <a href="sale.php"><p>KHUYẾN MÃI</p></a>
  </div>
  <div id="content" class="clearfix">
    <div class="introduction">
      <div class="itemIntroduction">
        <div class="titleDescription">
          Thanh toán
        </div>
        <hr>
        <div class="introductionContent clearfix">
            <div class="registerContent">
              <h3>Thông tin khách hàng</h3>
              <form class="" action="pay-process.php" method="post">
                  <table>
                  <tr>
                    <td>Họ tên <span class="point">(*)</span></td>
                    <td>
                      <input type="text" name="name" value="<?php if(isset($hoten)) echo $hoten; ?>" />
                    </td>
                  </tr>
                  <tr>
                    <td>Địa chỉ <span class="point">(*)</span></td>
                    <td>
                      <input type="text" name="address" value="<?php if(isset($dia_chi)) echo $dia_chi;?>"/>
                    </td>
                  </tr>
                  <tr>
                    <td>Số điện thoại <span class="point">(*)</span></td>
                    <td>
                      <input type="text" name="phone" value="<?php if(isset($sdt)) echo $sdt; ?>"/>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <span class="notification">
                        <?php
                          if(isset($error)) echo $error;
                          if(isset($msg)) echo $msg;
                        ?>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="bntRegister">
                        <input type="reset" value="Hủy">
                        <input type="submit" name="btnsubmit" value="Xác nhận">
                      </div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <div class="favorable">
              <span class="titleFavorable"><h3>Thông tin đặt hàng</h3></span>

                  <table border="1" cellspacing="0">
                      <tr>
                          <td>STT</td>
                          <td>Tên sản phẩm</td>
                          <td>Số lượng</td>
                          <td>Đơn giá</td>
                          <td>Sale (%)</td>
                          <td>Thành tiền</td>
                      </tr>
                      <?php
                        $dem = 0;
                        $total = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $sp[] = $key;
                        }
                        $str = implode(",", $sp);
                        $query = "SELECT * FROM sanpham WHERE id_sp IN ($str)";
                        $result = mysqli_query($con, $query) or die('ERROR SELECT SP IN 111/pay.php');
                        while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $dem++;
                            $thanhtien = 0;
                            ?>
                            <tr>
                                <td><?php echo $dem; ?></td>
                                <td><?php echo $rows['ten_sp'];?></td>
                                <td><?php echo $_SESSION['cart'][$rows['id_sp']];?></td>
                                <td><?php echo number_format($rows['gia_sp']);?></td>
                                <td><?php echo $rows['sale'];?></td>
                                <td>
                                    <?php
                                    $thanhtien = $_SESSION['cart'][$rows['id_sp']]*
                                                ($rows['gia_sp'] - $rows['gia_sp']*$rows['sale']/100); 
                                    echo number_format($thanhtien);
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $total += $thanhtien;
                        }
                      ?>

                      <tr class="sum">
                          <td colspan="4">Tổng cộng</td>
                          <td colspan="3"><?php echo number_format($total);?></td>
                      </tr>
                  </table>
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include_once 'footer.php';
  ?>
</div>
</body>
</html
