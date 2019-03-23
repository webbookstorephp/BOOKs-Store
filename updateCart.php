<?php
    session_start();
    require_once('libraries/Database.php');
    $db = new Database;

    $key = intval($_GET['key']);
    $qty = intval($_GET['qty']);

    $_SESSION['cart'][$key]['qty'] = $qty;

    echo 1;
?>