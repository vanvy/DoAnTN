<?php
  session_start();
  include_once "../models/connect.php";
  $idLoai = $_REQUEST['id_loai'];
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
    <?php
      $query="SELECT * FROM baiviet WHERE id_loai='$idLoai'";
      $result=mysqli_query($con,$query) or die ("LOI TRUY VAN: ".mysqli_error($con));
      while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>
        <div class="reviewProduct">
          <div class="reviewProductImage">
            <img src="<?php echo $rows['hinh_anh']; ?>" />
          </div>
          <div class="reviewProductContent">
            <h3><?php echo $rows['tieude']; ?></h3>
            <p><?php echo $rows['nd_chinh']; ?></p>
            <span class="detail"><a href="contentdetail.php?id_baiviet=<?php echo $rows['id_baiviet'];?>">Chi tiết >></a></span>
          </div>
        </div>
        <?php
      }
    ?>
  </div>
  <?php
    include_once 'footer.php';
  ?>
</div>
</body>
</html
