<div id="header">
		<div id="headerL">
			<h3><a href="../view/index.php">TivaShop</a></h3>
		</div>
		<div id="headerR">
			<ul>
				<li><a href="account.php?id_user=<?php echo $_SESSION['id_user']; ?>">Thông tin tài khoản</a></li>
				<li><a href="../view/logout.php" onclick="return window.confirm('Bạn có muốn đăng xuất?')">Đăng xuất</a></li>
			</ul>
		</div>
</div>
