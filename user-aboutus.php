<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心-关于我们</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/mine.css">
	<link rel="stylesheet" href="css/user.css">
</head>
<body>
	<div class="container">
		<?php include'public/user-header.php' ?>
		<!-- warp -->
		<div class="warp">
			<div class="user-about width center img80 c000">
				<p>欢迎大家来论坛互动！</p>
				<img src="images/qrcode_for_vzan.jpg" class="mt20">
			</div>
		</div>
		<!-- /warp -->

		<!-- navbar -->
		<div class="menu">
			<div class="home" substt='./images/post-big2_02.jpg'>
				<img src="./images/post-big2_01.jpg">
				<span>首页</span>
			</div>
			<div class="module" substt='./images/post-big2_04.jpg'>
				<div class="arrow" style="left: 114.667px;"></div>
				<img src="./images/post-big2_03.jpg">
				<span>板块</span>
			</div>
			<div class="post" substt='./images/post-big2_07.jpg'>
				<img src="./images/post-big2_06.jpg">
				<span>发帖</span>
			</div>
			<div class="active mine" substt='./images/post-big2_08.jpg'>
				<img src="./images/post-big2_09.jpg">
				<span>我的</span>
			</div>
			<div class="cf"></div>
		</div>
		<!-- /navbar -->
	</div>
</body>
<script src="js/jquery-2.2.4.min.js"></script>
<script src = 'js/mine.js'></script>
<script src="js/user.js">

</script>
</html>