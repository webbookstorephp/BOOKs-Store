<?php 
    session_start();
    require_once('libraries/Database.php');
    $db = new Database;
    // get id can remove
    $id = intval($_GET['id']);
    unset($_SESSION['cart'][$id]);

    $_SESSION['rm_success'] = ' Xóa giỏ hàng thành công';
    header("location: gio-hang.php");
?>