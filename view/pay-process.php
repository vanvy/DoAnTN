<?php
    session_start();
    if(!isset($_SESSION['cart'])) {
        header('Location: index.php');
    }
    require_once "../models/user.php";
    $id_user = 0;
    // Kiem tra neu nguoi mau da la thanh vien thi lay thong tin tu database ra
    if(isset($_SESSION['email']) && $_SESSION['pwd']) {
        $email = $_SESSION['email'];
        $pwd = $_SESSION['pwd'];
        $result = user::checkUserLogin($email, $pwd);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $num = mysqli_num_rows($result);
        if($num==1) {
            $hoten = $row['hoten'];
            $dia_chi = $row['dia_chi'];
            $sdt = $row['sdt'];
            $id_user = $row['id_user'];
        }
    }

    $hoten = $_POST['name'];
    $dia_chi = $_POST['address'];
    $sdt = $_POST['phone'];
    $day = date('d');
    $month = date('m');
    $year = date('Y');
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $sp[] = $key;
    }
    $str = implode(",", $sp);
    $query = "SELECT * FROM sanpham WHERE id_sp IN ($str)";
    $result = mysqli_query($con, $query) or die ('ERROR SELECT SP IN 35/pay-cart.php');
    while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $SLMUA[] = $_SESSION['cart'][$rows['id_sp']];
    	$SLNEW[] = $rows['soluong'] - $_SESSION['cart'][$rows['id_sp']];
    	$GIASP[] = $rows['gia_sp'];
        $SALE[] = $rows['sale'];
        $TT[] = $_SESSION['cart'][$rows['id_sp']]*
                  ($rows['gia_sp'] - $rows['gia_sp']*$rows['sale']/100);

    	$total += $_SESSION['cart'][$rows['id_sp']]*
                  ($rows['gia_sp'] - $rows['gia_sp']*$rows['sale']/100);
    }
    // Cap nhat khach hang
    $query1 = "INSERT INTO `khachhang`(`ten_kh`, `sdt`, `diachi`)
                VALUES ('$hoten', '$sdt', '$dia_chi')";
    echo $query1."<br>";
    $result1 = mysqli_query($con, $query1) or die ('ERROR INSERT KH: '.mysqli_error($con));
    if($result1) {
        $id_kh = mysqli_insert_id($con);
        $query2 = "INSERT INTO `hoadon`(`id_kh`, `ngay_lap`, `thang_lap`, `nam_lap`, `id_user`, `tongtien`, `status`)
                    VALUES ('$id_kh', '$day', '$month', '$year', '$id_user', '$total', 'Đặt hàng')";
        $result2 = mysqli_query($con, $query2) or die('ERROR INSERT HOADON: '.mysqli_error($con));
        if($result2) {
            $id_hd = mysqli_insert_id($con);
            var_dump($sp)."<br/>";
            for($i=0;$i<count($sp); $i++) {
                $idsp = $sp[$i];
                $sl_mua = $SLMUA[$i];
                $sl_new = $SLNEW[$i];
                $gia_sp = $GIASP[$i];
                $sale = $SALE[$i];
                $thanhtien = $TT[$i];

                echo $id_sp." - ".$sl_mua." - ".$sl_new." - ".$gia_sp."<br/>";
                $query3  = "INSERT INTO `chitiethd`(`id_hd`, `id_sp`, `soluong`, `gia`, `sale`, `thanhtien`)
                            VALUES ('$id_hd', '$idsp', '$sl_mua', '$gia_sp', '$sale', '$thanhtien')";
                $result3 = mysqli_query($con, $query3) or die('ERROR INSERT CTHD: '.mysqli_error($con));
                // Cap nhat lai so luong san pham
                $query4 = "UPDATE sanpham SET soluong=$sl_new WHERE id_sp='$idsp'";
                $result4 = mysqli_query($con, $query4) or die('ERROR UPDATE SP: '.mysqli_error($con));
                if($result3 && $result4) {
                    echo "Them moi thanh cong";
                }
            }
        }
    }
    // Huy gio hang
    unset($_SESSION['cart']);
    header("Location: index.php?msg=Đặt hàng thành công!");
?>
