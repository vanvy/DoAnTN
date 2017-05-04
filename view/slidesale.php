<?php
  include_once "../models/connect.php";
?>
<div id="sale-off">
  <a href="sale.php"><p>KHUYẾN MÃI</p></a>
  <div id="cssSlider" class="clearfix">
    <div id="slideDiv">
      <!-- chay dc 8 the div -->
      <?php
        $query="SELECT * FROM sanpham";
        $result=mysqli_query($con, $query) or die ("LOI LIET KE: ".mysqli_error($con));
        while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){
          if($rows['sale'] != 0){
            ?>
            <div class="itemInformation">
              <a href="productdetail.php?id_sp=<?php echo $rows['id_sp']; ?>"><img src="<?php echo $rows['hinh_anh']?>"/></a>
              <div class="information">
                <ul>
                  <li><?php echo $rows['ten_sp']; ?></li>
                  <li><?php echo number_format( $rows['gia_sp']); ?></li>
                  <li>SALE <?php echo $rows['sale']; ?>%</li>
                </ul>
              </div>
            </div>
            <?php
          }
        }
      ?>
      </div>
    </div>
</div>
