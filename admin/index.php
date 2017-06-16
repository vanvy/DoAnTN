<?php
	 require_once "../view/check.php";
	 // dem so luong users
	 $query = "SELECT COUNT(id_user) as qty FROM user";
	 $result = mysqli_query($con, $query) or die ("ERROR SELECT COUNT(ID_USER): ".mysqli_error($con));
	 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	 $countUsers = $row['qty'];

	 // dem so luong san pham
	 $query1 = "SELECT COUNT(id_sp) as qty FROM sanpham";
	 $result1 = mysqli_query($con, $query1) or die ("ERROR SELECT COUNT(ID_USER): ".mysqli_error($con));
	 $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
	 $countProducts = $row1['qty'];

	 // dem so luong dong san pham

	 // dem so luong thuong hieu

	 // dem so luong hoa don
	 $query2 = "SELECT COUNT(id_hd) as qty FROM hoadon";
	 $result2 = mysqli_query($con, $query2) or die ("ERROR SELECT COUNT(ID_USER): ".mysqli_error($con));
	 $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
	 $countBills = $row2['qty'];

	 // dem so luong loai bai viet

	 // dem so luong bai viet
	 $query3 = "SELECT COUNT(id_baiviet) as qty FROM baiviet";
	 $result3 = mysqli_query($con, $query3) or die ("ERROR SELECT COUNT(ID_USER): ".mysqli_error($con));
	 $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
	 $countArticles = $row3['qty'];

	 // dem so luong loai san pham
	 $query4 = "SELECT COUNT(id_loaisp) as qty FROM loaisp";
	 $result4 = mysqli_query($con, $query4) or die ("ERROR SELECT COUNT(ID_USER): ".mysqli_error($con));
	 $row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);
	 $countCategories = $row4['qty'];
?>
<!doctype html>
<html>
<head>
	<title>Trang Admin</title>
	<meta charset="ùt-8">
	<link rel="stylesheet" href="../style/main_admin.css">
	<link rel="shortcut icon" type="image/png" href="../images/shape-1.png">
</head>
<body>
	<div id="header">
		<?php include_once "header.php" ?>
	</div>
	<div id="sidebar">
		<?php include_once "sidebar.php" ?>
	</div>
	<div id=content>
		<h1>Thống kê</h1>
		<ul>
			<li>
			<a href="#"><img src="../images/users.png" width="70"></a>
			<p>Người dùng</p>
			<p><?php echo $countUsers; ?></p>
			</li>
			<li>
			<a href="#"><img src="../images/dollar-paper-bills-stack.png" width="70"></a>
			<p>Hóa đơn</p>
			<p><?php echo $countBills; ?></p>
			</li>
			<li>
			<a href="#"><img src="../images/cosmetics-hot.png" width="70"></a>
			<p>Sản phẩm</p>
			<p><?php echo $countProducts; ?></p>
			</li>
			<li>
			<a href="#"><img src="../images/attach.png" width="70"></a>
			<p>Bài viết</p>
			<p><?php echo $countArticles; ?></p>
			</li>
		</ul>
	</div>
</body>
</html>
