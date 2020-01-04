
<!DOCTYPE HTML>
<html>
<head>
	<?php 
		require_once 'config.php';
		header('Content-Type: text/html; charset=UTF-8');
		if (!isset($_SESSION['TenTK'])){
			die('');
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
				<li><a><?php echo $_SESSION['TenTK'],'&nbsp';?></a><a href="logout.php">Đăng xuất</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
<div class="text-h">
	<h2>Web Luyện Thi Trắc Nghiệm</h2>
</div>
<div class="section group">
    <?php 
        $query = 'SELECT * FROM De';
        $response = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($response)){ 
    ?>
	<div class="col_1_of_3 span_1_of_3">
		<!-- <div class="grid-img">
				<a href="details.html"><img src="images/pic4.jpg" alt=""/></a> 
		</div> -->
		<p><?php echo "De ".$row["MaDe"]?></p>
		<!-- <div class="btn right"><a href="text.php?de=<?php echo $row["MaDe"]?>">Làm bài</a></div> -->
		<form method='post' action="text.php" accept-charset="utf-8">
			<input type="hidden" name="sode" value="<?php echo $row["MaDe"];?>">
			<input type="submit" value='Làm bài' name ='lam' class='btn right'/>
		</form>
		<?php
			if (isset($_POST['lam'])) {
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