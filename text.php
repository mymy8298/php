<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/styleTN.css" media="all" />
</head>

<body>
	<?php 
		include 'config.php';
		header('Content-Type: text/html; charset=UTF-8');
		$_SESSION['sode']= $_POST['sode'];
	?>
<h1>Hãy trả lời những câu hỏi bên dưới</h1>
	
<form action="kq.php" method='post' class='quiz_form' id='quiz_form' accept-charset="utf-8">

	<?php 
		$query = "SELECT * FROM cauhoi Where MaDe ='".$_POST['sode']."' Order By Rand()";
		$response = mysqli_query($db,$query);
			if (mysqli_num_rows($response) > 0){
				$a = 0;
			while($result=mysqli_fetch_array($response)){
				$a++;
	?>
	<input type="hidden" name="de" value="<?php echo $result['MaDe'];?>">
	<div id="question_<?php echo $a;?>" class='questions'>
		<h2 id="question_<?php echo $a;?>"><?php echo $a.".".$result['ND'];?></h2>
		<div class='align'>
			<input type="radio" value="1" id='radio1_
			<?php echo $result['MaCH'];?>' name='<?php echo $result['MaCH'];?>'>
				<label id='ans1_<?php echo $a;?>' for='1'>
				<?php echo $result['A'];?></label><br/>
			<input type="radio" value="2" id='radio2_
			<?php echo $result['MaCH'];?>' name='<?php echo $result['MaCH'];?>'>
				<label id='ans2_<?php echo $a;?>' for='1'>
				<?php echo $result['B'];?></label><br/>
			<input type="radio" value="3" id='radio3_
			<?php echo $result['MaCH'];?>' name='<?php echo $result['MaCH'];?>'>
				<label id='ans3_<?php echo $a;?>' for='1'>
				<?php echo $result['C'];?></label><br/>
			<input type="radio" value="4" id='radio4_
			<?php echo $result['MaCH'];?>' name='<?php echo $result['MaCH'];?>'>
				<label id='ans4_<?php echo $a;?>' for='1'>
				<?php echo $result['D'];?></label>
	<input type="radio" checked='checked' value="5" style='display:none' id='radio4_
	<?php echo $result['MaCH'];?>' name='<?php echo $result['MaCH'];?>'></div>

	<?php 
		}
	}
	?>
</form>
	<br/><input type="submit" value='Nộp bài' name='kiemtra' class='butt'/><br/>
	<?php
		if (isset($_POST['kiemtra'])) {
			header("Location: kq.php");
			exit;
			}
	?>
    
<!-- <div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Phát triển phần mềm mã nguồn mở:</span>
        <span class="article-link"><a> Đào Lê Duy Hùng ĐHCN3A, Nguyễn Thị Trà My ĐHCN3C</a></span>
    </span>
</div> -->
    
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/watch.js"></script>

</body>
</html>
