<?php session_start(); 
 
if (isset($_SESSION['TenTK'])){
    unset($_SESSION['TenTK']); // xóa session login
    }
    header("Location: login.php");
    exit;
?>
