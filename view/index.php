<?php
  session_start();
  include_once "../models/connect.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tiva Shop</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/mainIndex.css" />
</head>
<body>
<div id="container">
    <?php
      include_once 'header.php';
    ?>
    <?php
      include_once 'menu.php';
     ?>
     <?php
      include_once 'slidesale.php';
     ?>
    <div id="content">

    <?php
      $query = "SELECT id_loaisp, ten_loaisp FROM loaisp";
      $result = mysqli_query($con, $query);
      while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
        <div class="Product">
          <h3><?php echo $rows['ten_loaisp']; ?></h3>
          <hr>
          <div class="productContent">
          <?php
            $querySP="SELECT * FROM sanpham WHERE id_loaisp=".$rows['id_loaisp'];
            //echo $querySP;
            $resultSP=mysqli_query($con,$querySP) or die ("LOI LIET KE: ".mysqli_error($con));
            while($rowSPs=mysqli_fetch_array($resultSP,MYSQLI_ASSOC)){
              ?>
              <div class="itemProduct">
                <a href="productdetail.php?id_sp=<?php echo $rowSPs['id_sp']; ?>">
                  <img src="<?php echo $rowSPs['hinh_anh']?>"/>
                </a>
                <div class="informationProduct">
                  <ul>
                    <li><?php echo $rowSPs['ten_sp']; ?></li>
                    <li><?php echo number_format($rowSPs['gia_sp']); ?></li>
                    <li>
                      <a href="add-cart.php?id_sp=<?php echo $rowSPs['id_sp']; ?>" title="Thêm vào giỏ hàng">
                        <img src="../images/shopping-cart.png" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <?php
            }
          ?>
          </div>
          <a href="listproduct.php?id_loaisp=2">Xem tiếp sản phẩm ....</a>
        </div>
        <?php
      }
    ?>

    </div>
    <?php
      include_once 'footer.php';
    ?>

    <form class="" action="index.html" method="post">
      <table padding>

      </table>
    </form>
</div>
</body>
</html>
