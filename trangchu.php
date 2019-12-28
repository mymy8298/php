<?php require_once 'config.php';
header('Content-Type: text/html; charset=UTF-8');?>
<!DOCTYPE HTML>
<html>
<head>
<!-- <title>The Free Extro-Electronics Website Template | Home :: w3layouts</title> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/home/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<script src="js/home/modernizr.js"></script>
 <!-- jQuery -->
<script src="js/home/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<!-- FlexSlider -->
<script defer src="js/home/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
</head>
<body>
<div class="wrap"> 
	<div class="header">
		<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""  title="logo"/></a>
		</div>
		<div class="nav-right">
			<ul class="nav">
				<li><a><?php echo $_SESSION['TenTK'],'&nbsp';?></a><a href="logout.php">Đăng xuất</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
<!-- <div class="menu-bg">
	<ul class="menu">
		<li><a href="" ></a></li>
		<li><a href="" ></a>
			<ul>
				<li><a href="" ></a></li>
				<li><a href="" ></a></li>
				<li><a href="" ></a></li>
			</ul>
		</li>
		<li><a href="" ></a></li>
		<li><a href="" ></a></li>
	</ul> 
	<div class="clear"></div>
</div>
<div class="flexslider">
   	<div class="flex-viewport" style="overflow: hidden; position: relative;">
   		<ul class="slides" style="width: 100%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-5032px, 0, 0);">
   			<li class="clone" style="width: 100%; float: left; display: block;">
        		<img src="images/slider1.jpg" alt=""/>
    		</li>
       		<li style="width: 100%; float: left; display: block;" class="">
    	    	<img src="images/slider2.jpg" alt=""/>
    		</li>
    		<li class="" style="width:100%; float: left; display: block;">
    	    	<img src="images/slider3.jpg" alt=""/>
    		</li>
		</ul>
	</div>
</div> -->
<!-- <div class="content">
<div class="section group">
	<div class="col_1_of_3 span_1_of_3">
		<div class="grid-imgs">
			<a href="details.html"><img src="images/pic1.jpg" alt=""/></a> 
		</div>
		<h2>Lorem Ipsum is simply dummy text </h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
	</div>
</div> -->
<div class="text-h">
	<h2>Web Luyện Thi Trắc Nghiệm</h2>
</div>

<div class="section group">
    <?php 
        $query = 'SELECT * FROM De';
        $response = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($response)){ 
    ?>
	<div class="col_1_of_5 span_1_of_5">
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
		<div class="col_1_of_4 span_1_of_4">
			<h2>Phát triển phần mềm mã nguồn mở</h2>
            <ul class="nav1">
                <li><a>GVHD: Nguyễn Văn Hoàn</a></li>
			</ul>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2></h2>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2></h2>
		</div>
		<div class="col_1_of_4 span_1_of_4">
			<h2>Thành Viên Nhóm</h2>
			<ul class="nav">
				<li><a>Đào Lê Duy Hùng ĐHCN3A</a></li><br>
				<li><a>Nguyễn Thị Trà My ĐHCN3C</a></li>
			</ul>
		</div>
	</div>
</div>

</div>
</body>
</html>