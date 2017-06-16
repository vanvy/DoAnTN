<?php
  session_start();
  include_once "../models/connect.php";
  $searchText = $_REQUEST['search'];
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
	<div id=content>
		<p><b><?php echo $num; ?> kết quả tìm kiếm cho từ khóa: <?php echo " '".$searchText."'"; ?></b></p>
		<?php
          while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
          	?>
          		<?php echo $rows['ten_sp']; ?><br>
          	<?php
          }
        ?>
	</div>
</body>
</html>
