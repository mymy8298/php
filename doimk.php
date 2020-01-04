<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Đổi mật khẩu</title>
  <link rel="stylesheet" href="css/register/style.css">
  <link rel="stylesheet" href="css/login/style.css">
  <?php 
    include('pass.php');
  ?>  
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="login-form" action='pass.php' method='POST'>
      <p><?php echo $_SESSION['TenTK'];?></p>
      <br><input type="password" name="txtmatkhau" placeholder="Mật khẩu cũ" />                         
      <input type="password" name="txtdoimk" placeholder="Mật khẩu mới"/>

      <input type="submit" name='doimk' value="Đổi mật khẩu" />
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
 
</body>
</html>
