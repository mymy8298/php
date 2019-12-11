<?php 
    $mysql_hostname = "localhost"; 
    $mysql_username = "root"; $mysql_password =""; 
    $mysql_database = "phpweb"; 
    $db = mysqli_connect($mysql_hostname , $mysql_username, $mysql_password, $mysql_database) or die("Connection problem With SQL. Hostname , Username Or Password are wrong!"); 
    mysqli_set_charset($db,'utf8');
?>
