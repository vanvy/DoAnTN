<?php
  session_start();
  include_once "../models/connect.php";
  $searchText = $_REQUEST['search'];
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
   <?php
    $query = "SELECT DISTINCT sanpham.id_sp as id_sp, sanpham.ten_sp as ten_sp, 
                              sanpham.hinh_anh as hinh_anh, sanpham.gia_sp as gia_sp
              FROM sanpham, loaisp, dong_sp 
              WHERE sanpham.ten_sp LIKE '%$searchText%'
              OR sanpham.ma_sp LIKE '%$searchText%'
              OR loaisp.ten_loaisp LIKE '%$searchText%'
              OR loaisp.mota LIKE '%$searchText%'
              OR dong_sp.ten_dsp LIKE '%$searchText%'
              OR dong_sp.mota LIKE '%$searchText%' 
              ORDER BY sanpham.id_sp DESC";
    $result=mysqli_query($con, $query) or die ("LOI TRUY VAN: ".mysqli_error($con));
    $num = mysqli_num_rows($result);
    ?>
    <div id="content" class="clearfix">
      <p><?php echo $num; ?> kết quả tìm kiếm cho từ khóa: <?php echo " '".$searchText."'"; ?></p>
      <div class="listImages clearfix">
          <?php
          while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
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
        ?>
      </div>
    </div>
    <?php
      include_once 'footer.php';
    ?>
</div>
</body>
</html>
