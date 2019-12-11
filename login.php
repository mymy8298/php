<?php
//Khai báo sử dụng session
session_start();
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
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    //$password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($db,"SELECT TenTK, MatKhau FROM user WHERE TenTK='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['MatKhau']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
  
    //Lưu tên đăng nhập
    $_SESSION['TenTK'] = $username;
    header("Location: TrangChu.php");
    exit;
}
    if (isset($_POST['dangky'])) 
    {
        header("Location: dangky.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <title>Login form using HTML5 and CSS3</title> -->
        <link rel="stylesheet" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
    <div class="container">
	    <section id="content">
        <form action='Login.php?do=login' method='POST'>

            <div>
				<input type="text" name='txtUsername' placeholder="Tên Tài Khoản" />
			</div>
			<div>
				<input type="password" name='txtPassword' placeholder="Mật Khẩu"  />
			</div>
			<div>
				<input type="submit" name="dangnhap" value="Đăng nhập" />
				<input type="submit" name='dangky' value="Đăng ký" />
			</div>
		</form>
	    </section>

    <script src="js/index.js"></script>
    </body>
</html>