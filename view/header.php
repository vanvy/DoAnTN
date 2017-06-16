<div id="header" class="clearfix">
  <div id="top-header" class="clearfix">
    <div id="top-header-left">
      <a href="index.php"><img src="../images/home1.png"/></a>
      <a href="#">Hotline: 0121.973.7545 </a>
    </div>
    <div id="search">
        <form action="searchProducts.php" method="get" accept-charset="utf-8">
          <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
          <button type="submit" 
                  style="
                    border: 0;
                    background-color: transparent;
                    vertical-align: middle;
                    margin-top: 4px;"
          >
            <img src="../images/search1.png"/>
          </button>
        </form>
    </div>
    <div id="account">
      <ul>
        <?php if(isset($_SESSION['user-name'])): ?>
          <li><a href="logout.php" onclick="return window.confirm('Bạn có muốn đăng xuất?')">Đăng xuất</a></li>
          <li style="color: #fff;"><a href="../admin/index.php">Xin chào <?php echo $_SESSION['user-name']; ?></a></li>
        <?php else: ?>
        <li><a href="login.php">Đăng nhập</a></li>
        <li><a href="register.php">Đăng ký</a></li>
      <?php endif; ?>
      </ul>
    </div>
    <div id="shopping-cart">
      <a href="shoppingcart.php" title="Giỏ hàng của bạn"><img src="../images/cart-of-ecommerce.png" /></a>
    </div>
  </div>
  <div id="bottom-header" class="clearfix">
    <span class="text1"><a href="hot-products.php">Sản phẩm bán chạy</a></span>
    <span class="logo"><a href="index.php"><img src="../images/logo.png"></a></span>
    <span class="text2"><a href="new-products.php">Sản phẩm mới</a></span>
  </div>
</div>
