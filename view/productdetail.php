<?php
  include_once "../models/connect.php";
  $id_SP=$_REQUEST['id_sp'];
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
        $query="SELECT * FROM sanpham WHERE id_sp='$id_SP'";
        $result=mysqli_query($con, $query) or die("LOI TRUY VAN: ".mysqli_error($con));
        while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $id_loaisp=$rows['id_loaisp'];
          $query1="SELECT ten_loaisp FROM loaisp WHERE id_loaisp='$id_loaisp'";
          $result1=mysqli_query($con,$query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
          $ten_loaisp=mysqli_fetch_array($result1,MYSQLI_ASSOC);
          $id_dsp = $rows['id_dsp'];
          $query2="SELECT ten_dsp FROM dong_sp WHERE id_dsp='$id_dsp'";
          $result2=mysqli_query($con,$query2) or die ("LOI TRUY VAN: ".mysqli_error($con));
          $ten_dsp=mysqli_fetch_array($result2,MYSQLI_ASSOC);
          $id_th=$rows['id_th'];
          $query3="SELECT ten_th FROM thuong_hieu WHERE id_th='$id_th'";
          $result3=mysqli_query($con,$query3) or die ("LOI TRUY VAN: ".mysqli_error($con));
          $ten_th=mysqli_fetch_array($result3,MYSQLI_ASSOC);
          ?>
          <div class="title">
            <ul>
              <li>
                <a href="listproduct.php?id_loaisp=<?php echo $rows['id_loaisp'];?>">
                  <?php echo $ten_loaisp['ten_loaisp'];?>
                </a>
              </li>
              <li>
                <a href="catagory.php?id_dsp=<?php echo $rows['id_dsp'];?>&id_loaisp=<?php echo $rows['id_loaisp']; ?>">
                  <?php echo $ten_dsp['ten_dsp']; ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="productDetail">
            <div class="productdetailImage">
              <img src="<?php echo $rows['hinh_anh']; ?>" />
            </div>
            <div class="productdetailContent">
              <ul>
                <li><?php echo $rows['ten_sp']; ?></li>
                <li><?php echo number_format($rows['gia_sp']); ?></li>
                <li><b>Thương hiệu:</b><?php echo $ten_th['ten_th']; ?> </li>
                <li><b>Xuất xứ:</b> <?php echo $rows['xuat_xu']; ?></li>
                <li><b>Trọng lượng/Dung lượng:</b> <?php echo $rows['dung_luong']; ?></li>
                <li><?php echo $rows['trangthai']; ?></li>
                <li>
                  <div class="shoppingAdd">
                    <form>
                      <input name="soluong" type="number" value="1" />
                    </form>
                    <a href="add-cart.php?id_sp=<?php echo $rows['id_sp']; ?>">Thêm vào giỏ hàng</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="description clearfix">
            <div class="titleDescription">
              Mô tả
            </div>
            <hr>
            <div class="descriptionContent">
              <p><?php echo $rows['mota_chitiet']; ?></p>
            </div>
          </div>
          <div class="description">
            <div class="titleDescription">
              Sản phẩm liên quan
            </div>
            <hr>
            <div class="descriptionImage">
              <?php
                $query4="SELECT * FROM sanpham WHERE id_dsp='$id_dsp' AND id_sp<>'$id_SP'";
                $result4=mysqli_query($con, $query4) or die ("LOI TRUY VAN: ".mysqli_error($con));
                while($rows4=mysqli_fetch_array($result4, MYSQLI_ASSOC)){
                  ?>
                  <div class="itemProduct">
                    <a href="productdetail.php?id_sp=<?php echo $rows4['id_sp'];?>"><img src="<?php echo $rows4['hinh_anh']; ?>"/></a>
                    <div class="informationProduct">
                      <ul>
                        <li><?php echo $rows4['ten_sp']; ?></li>
                        <li><?php echo number_format($rows4['gia_sp']); ?></li>
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
        }
      ?>
    </div>
    <?php
      include_once 'footer.php';
    ?>
</div>
</body>
</html>
