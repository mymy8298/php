<!DOCTYPE HTML>
<html>
<head>
	<?php 
		include('config.php');
		header('Content-Type: text/html; charset=UTF-8');
		if (!isset($_SESSION['TenTK'])){
			die("<center><strong>Bạn phải đăng nhập để xem nội dung. <a href='login.php'>Đến trang đăng nhập</a></strong></center>");
		} 
		if (isset($_SESSION['pl']==1)){
			die("<center><strong>Bạn không có quyền xem nội dung này. <a href='login.php'>Đến trang đăng nhập</a></strong></center>");
		} 
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/home/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/admin/style.css">
</head>
<body>
<div class="wrap"> 
	<div class="header">
		<!-- <div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""  title="logo"/></a>
		</div> -->
		<div class="nav-right">
			<ul class="nav">
				<li>
					<p>chào admin <?php echo $_SESSION['TenTK'];?> &nbsp;
						<a href="doimk.php">Đổi mật khẩu</a>&nbsp;
						<a href="logout.php">Đăng xuất</a></p>
				</li>
			</ul>
		</div>
		<div class="nav-left">
			<ul class="nav">
				<li>
					<a href="trangchu.php">Home</a>&nbsp;			
				</li>
			</ul>
		</div>
		<div class="clear"></div>
    </div>
<div class="text-h">
	<h2>Tài khoản người dùng</h2>
</div>
<div class="section group">
    <?php 
            $query = "SELECT * FROM user where pl = 2";
            $response = mysqli_query($db,$query);
            while ($row = mysqli_fetch_array($response)){ 
    ?>
	<div class="col_1_of_3 span_1_of_3">
		<!-- <div class="grid-img">
				<a href="details.html"><img src="images/pic4.jpg" alt=""/></a> 
        </div> -->
		<form method='post' action="admin.php" accept-charset="utf-8">
            <h2><?php echo $row["TenTK"];?></h2>
            <input type="hidden" name="tk" value="<?php echo $row["TenTK"];?>">
			<br><input type="submit" name="del" value="Xóa TK" class='btn right'>
			<input type="submit" name ='up' value="Cấp quyền admin" class='btn left'/>
		</form>

	</div>
    <?php 
        } 
        if (isset($_POST['del'])) {
            $del =  mysqli_query($db,"DELETE FROM user WHERE TenTK='".$_POST["tk"]."'");
            header("Location: admin.php");
            exit;
        }
        if (isset($_POST['up'])) {
            $up = mysqli_query($db,"UPDATE user SET pl='1' WHERE TenTK='".$_POST["tk"]."'");
            header("Location: admin.php");
            exit;
        }
	?>
    
</div>
<div class="text-h">
	<h2>Tài khoản admin</h2>
</div>
<div class="section group">
    <?php 
            $query1 = "SELECT * FROM user where pl = 1 and TenTK !='".$_SESSION['TenTK']."'";
            $response1 = mysqli_query($db,$query1);
            while ($row1 = mysqli_fetch_array($response1)){ 
    ?>
	<div class="col_1_of_3 span_1_of_3">
		<!-- <div class="grid-img">
				<a href="details.html"><img src="images/pic4.jpg" alt=""/></a> 
        </div> -->
		<form method='post' action="admin.php" accept-charset="utf-8">
            <h2><?php echo $row1["TenTK"];?></h2>
            <input type="hidden" name="tk1" value="<?php echo $row1["TenTK"];?>">
			<br><input type="submit" name="del1" value="Xóa TK" class='btn right'>
			<input type="submit" name ='down' value="Truất quyền admin" class='btn left'/>
        </form>
        
	</div>
    <?php 
        }     
    if (isset($_POST['del1'])) {
        $del1 = mysqli_query($db,"DELETE FROM user WHERE TenTK='".$_POST["tk1"]."'");
        header("Location: admin.php");
    }
    if (isset($_POST['down'])) {
        $down = mysqli_query($db,"UPDATE user SET pl = 2 WHERE TenTK='".$_POST["tk1"]."'");
        header("Location: admin.php");
    }		
    ?>
</div>
<div class="footer">
	<div class="section group">
		<div class="col_1_of_2 span_1_of_2">
			<h2>Phát triển phần mềm mã nguồn mở</h2>
            <ul class="nav1">
                <li><a>GVHD: Nguyễn Văn Hoàn</a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Thành Viên Nhóm</h2>
			<ul class="nav1">
				<li><a>Đào Lê Duy Hùng ĐHCN3A</a></li><br>
				<li><a>Nguyễn Thị Trà My ĐHCN3C</a></li>
			</ul>
		</div>
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
</body>
</html>