<?php
//Khai báo sử dụng session
//Kết nối tới database
include('config.php');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$username && !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if (!$password) {
        echo "Vui lòng nhập mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    //$password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($db,"SELECT * FROM user WHERE TenTK='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    $_SESSION['TenTK'] = $username;
    $_SESSION['Ten'] = $row['TenUser'];
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['Pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
  
    //Lưu tên đăng nhập
    if($row['pl']==1) {    
        $_SESSION['pl']=1;
        header("Location: admin.php");
        exit;
    }
    if($row['pl']==2) {
        $_SESSION['pl']=2;
        header("Location: trangchu.php");
        exit;
    }
}
?>