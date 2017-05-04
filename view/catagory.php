<?php
  include_once "../models/connect.php";
  $idLoaisp = $_REQUEST['id_loaisp'];
  $idDongsp = $_REQUEST['id_dsp'];
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
        $query="SELECT * FROM dong_sp WHERE id_dsp='$idDongsp'";
        $result=mysqli_query($con, $query) or die ("LOI TRUY VAN: ".mysqli_error($con));
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      ?>
      <p><?php echo $row['ten_dsp'];?></p>
      <div class="listImages clearfix">
        <?php
          $query1="SELECT * FROM sanpham WHERE id_dsp='$idDongsp'";
          $result1=mysqli_query($con, $query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
          while($rows1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
            ?>
            <div class="itemProduct catagory">
              <a href="productdetail.php?id_sp=<?php echo $rows1['id_sp']; ?>"><img src="<?php echo $rows1['hinh_anh']; ?>"/></a>
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
    </div>
    <?php
      include_once 'footer.php';
    ?>
</div>
</body>
</html>
