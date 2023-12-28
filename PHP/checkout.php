<?php
session_start();
require_once '../Controller/Checkout.php';

if ($_SESSION['role_user_id'] != 2) {
    header("Location: login.php");
    exit;
}else if($_SESSION['role_user_id'] != 2){
    header("Location: ../index.php");
    exit;
}

if (isset($_SESSION['login'])) {
    echo "<script>alert('" . $_SESSION['login'] . "')</script>";
    unset($_SESSION['login']);
}

$checkout = new Checkout();
$checkout->viewStripe();
?>
