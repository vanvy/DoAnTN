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
      <p>Sản phẩm bán chạy</p>
      <div class="listImages clearfix">
        <?php
          // xuat ra san pham co trong chi tiet hoa don, sap xep giam dan theo so luong
          $query1="SELECT DISTINCT sanpham.id_sp as id_sp, sanpham.ten_sp as ten_sp,
                                  sanpham.gia_sp as gia_sp, sanpham.hinh_anh as hinh_anh,
                                  COUNT(sanpham.id_sp) as dem, chitiethd.id_sp 
                  FROM sanpham, chitiethd 
                  WHERE sanpham.id_sp = chitiethd.id_sp 
                  GROUP BY chitiethd.id_sp 
                  ORDER BY dem DESC
                  LIMIT 12";
          $result1=mysqli_query($con, $query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
          $num = mysqli_num_rows($result1);
          $arr = [];
          while($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
            $arr[] = $rows['id_sp'];
            ?>
            <div class="itemProduct catagory">
              <a href="productdetail.php?id_sp=<?php echo $rows['id_sp']; ?>"><img src="<?php echo $rows['hinh_anh']; ?>"/></a>
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
          // neu khong du 12 san pham thi lay them cac san pham moi ngoai tru cac san pham da xuat ra
          if($num<12) {
            $str = implode(",", $arr);
            $addNum = 12-$num;
            $query2="SELECT * FROM sanpham
                     WHERE id_sp NOT IN ($str)
                     ORDER BY id_sp DESC LIMIT 12";
            $result2=mysqli_query($con, $query2) or die ("LOI TRUY VAN: ".mysqli_error($con));
            while ($rows = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
              ?>
              <div class="itemProduct catagory">
              <a href="productdetail.php?id_sp=<?php echo $rows['id_sp']; ?>"><img src="<?php echo $rows['hinh_anh']; ?>"/></a>
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
