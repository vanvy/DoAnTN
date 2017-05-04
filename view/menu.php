<?php
  include_once "../models/connect.php";
?>
<div id="menu">
  <ul id="nav-menu" class="clearfix">
    <li><a href="#">DANH MỤC SẢN PHẨM</a>
      <ul class="product-menu shown-menu">
        <?php
          $query="SELECT * FROM loaisp";
          $result=mysqli_query($con, $query) or die ("LOI TRUY VAN: ".mysqli_error($con));
          while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $id_loaisp=$rows['id_loaisp'];
            ?>
              <li>
                <div class="product-menu-small">
                  <a href="listproduct.php?id_loaisp=<?php echo $rows['id_loaisp']; ?>">
                    <img src="<?php echo $rows['hinh_anh']; ?>" />
                    <p><?php echo $rows["ten_loaisp"]; ?></p>
                  </a>
                  <ul>
                    <?php
                    $query1="SELECT * FROM dong_sp WHERE id_loaisp='$id_loaisp'";
                    $result1=mysqli_query($con, $query1) or die ("LOI TRUY VAN: ".mysqli_error($con));
                    while($rows1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                      ?>
                        <li>
                          <a href="catagory.php?id_dsp=<?php echo $rows1['id_dsp']; ?>&id_loaisp=<?php echo $rows['id_loaisp'];?>">
                            <?php echo $rows1['ten_dsp'] ?>
                          </a>
                        </li>
                      <?php
                    }
                    ?>
                  </ul>
                </div>
              </li>
            <?php
          }
        ?>
      </ul>
    </li>
    <li><a href="introduction.php">GIỚI THIỆU</a></li>
    <li><a href="news.php?id_loai=1">TIN TỨC</a></li>
    <li><a href="news.php?id_loai=2">TẠP CHÍ SẢN PHẨM</a></li>
    <li><a href="news.php?id_loai=4">CẨM NANG LÀM ĐẸP</a></li>
  </ul>
</div>
