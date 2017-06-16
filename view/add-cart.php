<?php
    session_start();
    require_once "../models/user.php";
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
        }
    }
    // Lay thong tin san pham
    $id_sp = $_REQUEST['id_sp'];
    $querySP = "SELECT * FROM sanpham WHERE id_sp='$id_sp'";
    $resultSP = mysqli_query($con, $querySP) or die('ERROR SELECT SANPHAM: '.mysqli_error($con));
    $rowSP = mysqli_fetch_array($resultSP, MYSQLI_ASSOC);

    // Kiem tra san pham da nam trong gio hang chua
    // Neu da co thi tang so luong them 1 san pham,
    // neu chua thi tao gio hang tai san pham duoc themco so luong la 1
    if(isset($_SESSION['cart'][$id_sp])) {
        $quatity = $_SESSION['cart'][$id_sp] + 1;
    } else {
        $quatity = 1;
    }
    // Cap nhat lai gia tri cua gio hang
    $_SESSION['cart'][$id_sp] = $quatity;
    // Chuyen sang trang shoppingcart.php
     header('Location: shoppingcart.php');
     exit;
    //var_dump($_SESSION['cart']);
?>
