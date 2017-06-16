<?php 
	$photo = ($_SESSION['avatar'] != "") ? $_SESSION['avatar'] : "../images/user-default.png";
?>
							
<div id="sidebar">
		<div id="Admin">
			<div id="hinh_ad">
				<a href="index.php">
					<img 
							src="<?php echo $photo; ?>"
							width="50" 
							height="50">
				</a>
			</div>
			<div id="name_ad">
				<p><?php echo $_SESSION['user-name']; ?></p>
			</div>
		</div>
		<div id="search">
			<div id="searchL">
				<form action="searchAdmin.php" method="get" accept-charset="utf-8">
					<input type="text" name="search" placeholder="Search">
					<button type="submit" 
			                style="
			                    border: 0;
			                    background-color: transparent;
			                    vertical-align: middle;
			                    margin-top: 4px;">
						<img src="../images/search.png">
					</button>
				</form>
			</div>
		</div>
		<!-- Quản lý -->
		<div class="manages">
			<ul>
				<li><a href="ql_users.php">Quản lý người dùng</a></li>
				<li><a href="ql_sanpham.php">Quản lý sản phẩm</a></li>
				<li><a href="ql_loaisp.php">Quản lý loại sản phẩm</a></li>
				<li><a href="ql_dongsp.php">Quản lý dòng sản phẩm</a></li>
				<li><a href="ql_thuonghieu.php">Quản lý thương hiệu</a></li>
				<li><a href="ql_donhang.php">Quản lý phiếu bán hàng</a></li>
				<li><a href="ql_baiviet.php">Quản lý bài viết</a></li>
				<li><a href="ql_loaibaiviet.php">Quản lý loại bài viết</a></li>
			</ul>
		</div>
</div>
