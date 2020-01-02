<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Trang đăng ký</title>
  <link rel="stylesheet" href="css/login/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/login/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Đăng ký tài khoản</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
                <section id="content">
                    <form action="dangky.php" method="POST">
                        <!-- <table cellpadding="0" cellspacing="0" border="1"> -->
                            <input class="text" type="text" name="txtTenTK" placeholder="Tên đăng nhập" required="" />                         
                            <input class="text email" type="password" name="txtmatkhau" placeholder="Mật Khẩu" required=""/>
                            <input class="text" type="text" name="txtEmail"  placeholder="Email" required=""/>
                            <input class="text email" type="text" name="txttenuser"  placeholder="Họ và tên" required=""/>
                            <input class="text" type="text" name="txtgioitinh"  placeholder="Giới tính" required=""/>
                            <input class="text email" type="text" name="txtsodt"  placeholder=" Số Điện Thoại" required=""/>
                            
                            <input type="submit" name="dangky" value="Đăng ký" />
                    </form>
                </section>
			</div>
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
	<!-- //main -->
<script src="js/index.js"></script>
    <?php
       include('xldangky.php');
    ?>
</body>
</html>
<!-- partial -->
</body>
</html>
