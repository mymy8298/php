<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<link rel="stylesheet" href="css/kq/style.css">
	<?php 
		include 'config.php';
		header('Content-Type: text/html; charset=UTF-8');
	?>
</head>

<body>
	<h1> Bài làm của <?php echo $_SESSION['TenTK'];?>
	</br>Đề <?php echo $_SESSION['sode'];?></h1><br>
	<center><form method='post' ></center>
	<?php
		$query = 'SELECT * FROM cauhoi Where MaDe ='.$_SESSION['sode'];
		$response = mysqli_query($db,$query);
			$b = 1;
			$d = 0;
			while($result=mysqli_fetch_array($response)){ 
				$i=$result['MaCH'];
				if($result['DapAn']==$_POST["$i"]){
					$d++;
					echo"<span class='kq'> Câu {$b}: Đúng </span><br>";
				}else if($_POST["$i"]==5){
					echo"<span class='kq'> Câu {$b}: Chưa chọn đáp án</span><br>";
				} else{
					echo"<span class='kq'> Câu {$b}: Sai  </span><br>";
				}
				$i++;
				$b++;
			}
			$kq = 10/($b - 1)*$d;
			$diem = round((float) $kq, 2);
			echo"<br><center><strong><span class='diem'> Kết Quả: {$diem} điểm </span></strong></center><br>";
	?>
		<br/>
			<center><input type="submit" value='Về trang chủ' name ='ve' class='butt'/></center>
		<br/>
	</form>
	<?php
	if (isset($_POST['ve'])) {
		header("Location: trangchu.php");
		exit;
	}
	?>
    
	<div class="footer-bar">
		<span class="article-wrapper">
			<span class="article-label">Phát triển phần mềm mã nguồn mở:</span>
			<span class="article-link"><a> Đào Lê Duy Hùng ĐHCN3A, Nguyễn Thị Trà My ĐHCN3C</a></span>
		</span>
	</div>
    
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/watch.js"></script>
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
