<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/styleTN.css" media="all" />
	<?php 
		include 'config.php';
		header('Content-Type: text/html; charset=UTF-8');
	?>
</head>

<body>
	<h1> Bài làm của <?php echo $_SESSION['TenTK'];?>
	</br>Đề <?php echo $_SESSION['sode'];?></h1>
	<form method='post' class='quiz_form' accept-charset="utf-8">
	<?php
		$query = 'SELECT * FROM cauhoi Where MaDe ='.$_POST['de'];
		$response = mysqli_query($db,$query);
			$b = 1;
			$d = 0;
			while($result=mysqli_fetch_array($response)){ 
				$i=$result['MaCH'];
				if($result['DapAn']==$_POST["$i"]){
					$d++;
					echo" Câu {$b}: Đúng <span class='quiz_form'></span><br>";
				}else if($_POST["$i"]==5){
					echo" Câu {$b}: Chưa chọn đáp án  <span class='quiz_form'></span><br>";
				} else{
					echo" Câu {$b}: Sai  <span class='quiz_form'></span><br>";
				}
				$i++;
				$b++;
			}
			$kq = 10/($b - 1)*$d;
			$diem = (float) $kq;
			echo"<br> KQ: {$diem} diem";
	?>
		<br/>
			<input type="submit" value='Về trang chủ' name ='ve' class='butt'/>
			</div>
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

</body>
</html>
