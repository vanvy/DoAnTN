<?php
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
      <div class="Product">
        <h3>Chăm sóc da mặt</h3>
        <hr>
        <div class="productContent">
            <?php
              $query="SELECT * FROM sanpham WHERE id_loaisp=2 " ;
              $result=mysqli_query($con,$query) or die ("LOI LIET KE: ".mysqli_error($con));
              while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
                <div class="itemProduct">
                  <a href="productdetail.php?id_sp=<?php echo $rows['id_sp']; ?>">
                    <img src="<?php echo $rows['hinh_anh']?>"/>
                  </a>
                  <div class="informationProduct">
                    <ul>
                      <li><?php echo $rows['ten_sp']; ?></li>
                      <li><?php echo number_format($rows['gia_sp']); ?></li>
                      <li>
                        <a href="add-cart.php?id_sp=<?php echo $rows['id_sp']; ?>" title="Thêm vào giỏ hàng">
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
      <div class="Product">
        <h3>Chăm sóc toàn thân</h3>
        <hr>
        <div class="productContent">
          <?php
            $query1="SELECT * FROM sanpham WHERE id_loaisp=3 " ;
            $result1=mysqli_query($con,$query1) or die ("LOI LIET KE: ".mysqli_error($con));
            while($rows1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
              ?>
              <div class="itemProduct">
                <a href="productdetail.php?id_sp=<?php echo $rows1['id_sp']; ?>">
                  <img src="<?php echo $rows1['hinh_anh']?>"/>
                </a>
                <div class="informationProduct">
                  <ul>
                    <li><?php echo $rows1['ten_sp']; ?></li>
                    <li><?php echo number_format($rows1['gia_sp']); ?></li>
                    <li>
                      <a href="add-cart.php?id_sp=<?php echo $rows['id_sp']; ?>" title="Thêm vào giỏ hàng">
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
        <a href="listproduct.php?id_loaisp=3">Xem tiếp sản phẩm ....</a>
      </div>
      <div class="Product">
        <h3>Chăm sóc tóc</h3>
        <hr>
        <div class="productContent">
            <?php
              $query2="SELECT * FROM sanpham WHERE id_loaisp=5 " ;
              $result2=mysqli_query($con,$query2) or die ("LOI LIET KE: ".mysqli_error($con));
              while($rows2=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                ?>
                <div class="itemProduct">
                  <a href="productdetail.php?id_sp=<?php echo $rows2['id_sp']; ?>">
                    <img src="<?php echo $rows2['hinh_anh']?>"/>
                  </a>
                  <div class="informationProduct">
                    <ul>
                      <li><?php echo $rows2['ten_sp']; ?></li>
                      <li><?php echo number_format($rows2['gia_sp']); ?></li>
                      <li>
                        <a href="add-cart.php?id_sp=<?php echo $rows['id_sp']; ?>" title="Thêm vào giỏ hàng">
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
        <a href="listproduct.php?id_loaisp=5">Xem tiếp sản phẩm ....</a>
      </div>
      <div class="Product">
        <h3>Mỹ phẩm trang điểm</h3>
        <hr>
        <div class="productContent">
            <?php
              $query3="SELECT * FROM sanpham WHERE id_loaisp=6 " ;
              $result3=mysqli_query($con,$query3) or die ("LOI LIET KE: ".mysqli_error($con));
              while($rows3=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                ?>
                <div class="itemProduct">
                  <a href="productdetail.php?id_sp=<?php echo $rows3['id_sp']; ?>">
                    <img src="<?php echo $rows3['hinh_anh']?>"/>
                  </a>
                  <div class="informationProduct">
                    <ul>
                      <li><?php echo $rows3['ten_sp']; ?></li>
                      <li><?php echo number_format($rows3['gia_sp']); ?></li>
                      <li>
                        <a href="add-cart.php?id_sp=<?php echo $rows['id_sp']; ?>" title="Thêm vào giỏ hàng">
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
        <a href="listproduct.php?id_loaisp=6">Xem tiếp sản phẩm ....</a>
      </div>
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
