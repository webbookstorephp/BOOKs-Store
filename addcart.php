<?php
    session_start();
    require_once('libraries/Database.php');
    $db = new Database;

    if(!isset($_SESSION['User']))
    {
        echo '<script>alert("Bạn cần đăng nhập tài khoản mới thực hiện được chức năng này "); location.href = "index.php"; </script>';
    }

    $id = intval($_GET['id']);
    $product = $db->fetchID("sanpham",$id);

    // kiểm tra nếu tồn tại giỏ hàng thì cập nhật
    // ngược lại thì tạo mới
    if(!isset($_SESSION['cart'][$id]))
    {
        // tao moi gio hang
        $_SESSION['cart'][$id]['name'] = $product['TenSP'];
        $_SESSION['cart'][$id]['image'] = $product['UrlHinh'];
        $_SESSION['cart'][$id]['discount'] = $product['GiaKhuyenMai'];
        $_SESSION['cart'][$id]['price'] = $product['Gia'] - $product['GiaKhuyenMai'];
        $_SESSION['cart'][$id]['qty'] = 1;
    }
    else
    {
        // cap nhat gio hang
        $_SESSION['cart'][$id]['qty'] += 1;
    }

    echo '<script>alert(" Thêm sản phẩm thành công "); location.href = "gio-hang.php"; </script>';
?>