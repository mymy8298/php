<!DOCTYPE HTML>
<html>
<head>
	<?php 
		include('config.php');
		header('Content-Type: text/html; charset=UTF-8');
		if (!isset($_SESSION['TenTK'])){
			die("<center><strong>Bạn phải đăng nhập để xem nội dung. <a href='index.php'>Đến trang đăng nhập</a></strong></center>");
		} 
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/home/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/register/style.css">
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
					<p><?php echo $_SESSION['Ten'];?>&nbsp;
						<a href="doimk.php">Đổi mật khẩu</a>&nbsp;
						<a href="logout.php">Đăng xuất</a></p>
				</li>
			</ul>
		</div>
		<br>
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
	<h2>Web Luyện Thi Trắc Nghiệm</h2>
</div >

	<?php 
		$query = 'SELECT * FROM monhoc';
		$response = mysqli_query($db,$query);
		while ($row = mysqli_fetch_array($response)){
	?>	
<div class="menu">	
	<form method='post' action="trangchu.php#">
		<input type="hidden" name="mon" value="<?php echo $row["mamh"];?>">
		<input type="submit" name ='mh' value='<?php echo $row["tenmh"]; ?>'/>
		<?php
			if (!isset($_POST['mh'])) {
				$query = 'SELECT * FROM De,monhoc';
				// header("Location: de.php");
				// exit;
			} else {
				$_SESSION["mon"] = $_POST["mon"];
				$query = 'SELECT * FROM De,monhoc WHERE mamh ='.$_SESSION["mon"];
			}
		?>
		</form>
</div>
	<?php 
		}
	?>
	
	
<div class="section group">	
    <?php 	
		// $query = 'SELECT * FROM De,monhoc';
		$response = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($response)){ 
	?>
	<div class="col_1_of_3 span_1_of_3">
		<!-- <div class="grid-img">
				<a href="details.html"><img src="images/pic4.jpg" alt=""/></a> 
		</div> -->
		<h2><?php echo $row["tenmh"]?></h2><br>
		<h2><?php echo "Đề ".$row["MaDe"]?></h2>
		<!-- <div class="btn right"><a href="text.php?de=<?php echo $row["MaDe"]?>">Làm bài</a></div> -->
		<form method='post' action="text.php" accept-charset="utf-8">
			<input type="hidden" name="tenmh" value="<?php echo $row["tenmh"];?>">
			<input type="hidden" name="mamh" value="<?php echo $row["mamh"];?>">
			<input type="hidden" name="sode" value="<?php echo $row["MaDe"];?>">
			<input type="submit" value='Làm bài' name ='lam' class='btn right'/>
		</form>
		<?php
			if (isset($_POST['lam'])) {
				$mamh = $_POST["mamh"];
				$sode = $_POST["sode"];
				header("Location: text.php");
				exit;
			}
		?>
	</div>
    <?php 
        }
    ?>

</div>
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

</body>
</html>