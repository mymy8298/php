<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Đăng Nhập</title>
  <link rel="stylesheet" href="css/register/style.css">
  <link rel="stylesheet" href="css/login/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
 
    <form class="login-form" action='dangnhap.php' method='POST'>
      <input type="text" name='txtUsername' placeholder="Tên Tài Khoản" />
      <input type="password" name='txtPassword' placeholder="Mật Khẩu"  />
      
      <input type="submit" name="dangnhap" value="Đăng nhập" />
      <p class="message">Chưa có tài khoản? <a href="login.php#">Đăng ký</a></p>
    </form>

    <form class="register-form" action='dangky.php' method='POST'>
      <input type="text" name="txtTenTK" placeholder="Tên đăng nhập" />                         
      <input type="password" name="txtmatkhau" placeholder="Mật Khẩu"/>
      <input type="text" name="txtEmail"  placeholder="Email"/>
      <input type="text" name="txttenuser"  placeholder="Họ và tên"/>
      <input type="text" name="gioitinh"  placeholder="Giới tính" disabled />
        <input type="radio" name="txtgioitinh" value="nam"/>Nam &nbsp;
        <input type="radio" name="txtgioitinh" value="nu"/>Nữ &nbsp;
        <input type="radio" name="txtgioitinh" value="khac"/>Khác &nbsp;     
      <input type="text" name="txtsodt"  placeholder=" Số Điện Thoại"/>

      <input type="submit" name='dangky' value="Đăng ký" />
      <p class="message">Đã tạo tài khoản? <a href="login.php#">Đăng nhập</a></p>
    </form>
  </div>
  <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
</div>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="css/login/script.js"></script>
  <script src="js/index.js"></script> 
  <?php 
    include('dangky.php');
    include('dangnhap.php');
  ?>  
</body>
</html>
