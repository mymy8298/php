<?php session_start(); 
 
if (isset($_SESSION['TenTK'])){
    unset($_SESSION['TenTK']); // xóa session login
    }
    header("Location: index.php");
    exit;
?>
