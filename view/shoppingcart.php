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

    if(isset($_POST['btn-update'])) {
        foreach ($_POST['qty'] as $key => $value) {
            if($value==0) {
                unset($_SESSION['cart'][$key]);
            }
            else if($value>0){
                $_SESSION['cart'][$key] = $value;
            }
        }
        header('Location: shoppingcart.php');
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
      <?php
          $found=false;
          if(isset($_SESSION['cart'])){
              foreach ($_SESSION['cart'] as $key => $value) {
                  if(isset($key) && is_numeric($key)){
                      $found = true;
                      break;
                  }
              }
          }
          if($found){
              ?>
    <p>Giỏ hàng của bạn</p>
    <div class="shoppingcartTable">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
          <tr>
            <td>Hình ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Đơn giá</td>
            <td>Sale (%)</td>
            <td>Thành tiền</td>
            <td>Xóa</td>
          </tr>

              <?php
                foreach ($_SESSION['cart'] as $key => $value) {
                  if(is_numeric($key)) {
                    $sp[] = $key;
                  }
                }
                $str = implode(",", $sp);

                $query = "SELECT * FROM sanpham WHERE id_sp IN ($str)";
                $result = mysqli_query($con, $query)
                        or die('ERROR SELECT SANPHAM IN 74/shoppingcart.php: '.mysqli_error($con));
                $total = 0;
                while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $thanhtien = 0;
                    ?>
                    <tr>
                        <td>
                          <img src="<?php echo $rows['hinh_anh'];?>" />
                        </td>
                        <td><?php echo $rows['ten_sp'];?></td>
                        <td>
                          <input type="number" value="<?php echo $_SESSION['cart'][$rows['id_sp']];?>"
                          name="qty[<?php echo $rows['id_sp'];?>]"  min=0 max=<?php echo $rows['soluong'];?>>
                        </td>
                        <td><?php echo number_format($rows['gia_sp']); ?></td>
                        <td><?php echo $rows['sale'];?></td>
                        <td>
                            <?php
                            $thanhtien = $_SESSION['cart'][$rows['id_sp']]*
                                        ($rows['gia_sp'] - $rows['gia_sp']*$rows['sale']/100); 
                            echo number_format($thanhtien);
                            ?>
                        </td>
                        <td>
                          <a href="del-cart.php?id_sp=<?php echo $rows['id_sp'];?>"
                              onclick="return window.confirm('Bạn có muốn xóa sản phẩm này ra khỏi giỏ hàng?')"
                              title="Xóa sản phẩm"><img src="../images/delete-button.png" /></a>
                        </td>
                    </tr>
                    <?php
                    $total += $thanhtien;
                }
              ?>
          <tr>
            <td colspan="4">Tổng cộng</td>
            <td colspan="4">
                <?php echo number_format($total)." vnd";?>
            </td>
          </tr>
        </table>
        <div class="shoppingcartButton clearfix">
          <span class="button"><a href="pay.php">Thanh toán</a></span>
          <span class="button"><a href="index.php">Tiếp tục mua hàng</a></span>
          <span class="button">
              <a href="del-cart.php?id_sp=0" onclick="return window.confirm('Bạn có muốn xóa giỏ hàng?')">Xóa giỏ hàng</a>
          </span>
          <input style="width: 150px" class="button" type="submit" name="btn-update" value="Cập nhật giỏ hàng">
        </div>
      </form>
      <?php
     }
     else{
      echo '<h4>Bạn chưa có sản phẩm nào trong giỏ hàng!</h4>';
     }
     ?>
    </div>

  </div>
  <div id="footer">
    <p>Copyright &copy; TivaShop | Design by Van Vy</p>
  </div>
</div>
</body>
</html
