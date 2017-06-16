<?php
  session_start();
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
    <div class="introduction">
      <div class="itemIntroduction">
        <div class="titleDescription">
          Thông tin
        </div>
        <hr>
        <div class="introductionContent">
          <ul>
            <li><b>Địa chỉ:</b> 123 Nguyễn Hoàng, TP Đà Nẵng </li>
            <li><b>Số điện thoại:</b> 0236.3556456</li>
            <li><b>Facebook:</b> http://facebook.com/tivashop</li>
            <li><b>Gmail:</b> myphamtiva@gmail.com </li>
          </ul>
        </div>
      </div>
      <div class="itemIntroduction">
        <div class="titleDescription">
          Hướng dẫn mua hàng
        </div>
        <hr>
        <div class="introductionContent">
          <ul>
            <li><b>Bước 1:</b> Chọn mặt hàng bạn cần mua </li>
            <li><b>Bước 2:</b> Kích vào biểu tượng giỏ hàng</li>
            <li><b>Bước 3:</b> Vào giỏ hàng của bạn để kiểm tra giỏ hàng</li>
            <li><b>Bước 4:</b> Thanh toán và điền đầy đủ thông tin của bạn</li>
            <li><b>Bước 5:</b> Nhân viên của TivaShop sẽ liên lạc lại để xác nhận đơn hàng của bạn</li>
          </ul>
        </div>
      </div>
      <div class="itemIntroduction">
        <div class="titleDescription">
          Ưu đãi thành viên
        </div>
        <hr>
        <div class="introductionContent">
          <ul>
            <li>Tri ân khách hàng</li>
            <li>Giảm 20% khi bạn mua hàng vào ngày sinh nhật của mình</li>
            <li>Mua hàng tích lũy điểm</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php
    include_once 'footer.php';
  ?>
</div>
</body>
</html
