<?php
    session_start();
    require_once "../models/user.php";
    // Kiem tra neu nguoi mau da la thanh vien thi lay thong tin tu database ra
    if(isset($_SESSION['email']) && $_SESSION['pwd']) {
        $email = $_SESSION['email'];
        $pwd = $_SESSION['pwd'];
        $result = user::checkUserLogin($email, $pwd);
        $row = mysqli_fetch_array($result);
        $num = mysqli_num_rows($result);
        if($num==1) {
            $hoten = $row['hoten'];
            $dia_chi = $row['dia_chi'];
            $sdt = $row['sdt'];
        }
    }
    if(!isset($_SESSION['cart'])) {
        header("Location: index.php");
    }
    $cart = $_SESSION['cart'];
    $id_sp = $_REQUEST['id_sp'];
    if($id_sp==0) {
        unset($_SESSION['cart']);
    } else {
        unset($_SESSION['cart'][$id_sp]);
    }
    header("Location: shoppingcart.php");
?>
