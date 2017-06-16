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
  <div id="content">
    <div class="listImages clearfix">
      <?php
        $query="SELECT * FROM sanpham";
        $result=mysqli_query($con, $query) or die ("LOI LIET KE: ".mysqli_error($con));
        while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
          if($rows['sale'] != 0){
            ?>
            <div class="itemProduct">
              <div class="itemSale">
                SALE <?php echo $rows['sale'];?>%
              </div>
              <a href="productdetail.php"><img src="<?php echo $rows['hinh_anh']; ?>"/></a>
              <div class="informationProduct">
                <ul>
                  <li><?php echo $rows['ten_sp']; ?></li>
                  <li><span id="priceSale" class="clearfix"></span><?php echo number_format($rows['gia_sp']*(100-$rows['sale'])/100);  ?></li>
                  <li>
                    <a href="add-cart.php?id_sp=<?php echo $rows['id_sp']; ?>" title="Thêm vào giỏ hàng">
                      <img src="../images/shopping-cart.png" />
                    </a>
                  </li>
                  <li><span id="price"><?php echo number_format($rows['gia_sp']); ?></span></li>
                </ul>
              </div>
            </div>
            <?php
          }
        }
      ?>
    </div>
  </div>
  <?php
    include_once 'footer.php';
  ?>
</div>
</body>
</html
