<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>微信支付</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/weipay.css">
</head>
<body>
	<div class="container">
		<div class="imgcan">
			<img src="images/132.jpg" alt="">
		</div>
		<div class="title">加尼弗尼亚煎饼</div>
		<div style="color:grey;font-size:.7rem;text-align:center">赏一个！</div>
		<div class="moneycan">
			<div class="options">
				<a href=""><span>100元</span></a>
				<a href=""><span>50元</span></a>
				<a href=""><span>20元</span></a>
			</div>
			<div class="options">
				<a href=""><span>5元</span></a>
				<a href=""><span>1元</span></a>
				<a href=""><span>0.1元</span></a>
			</div>
		</div>
		<div class="else"> 
			<a href="javascript:pop()">其他金额</a>
		</div>
		<!-- 蒙板 -->
		<div class="mask-ui">
		</div>
		<form action="">
			<div class="elseMoney">
				<div class="windowTitle">
					<span>其他金额</span>
				</div>
				<div class="value">
					<span>金额（元）</span>
					<input type="text" placeholder="可填写0.1-1000">
				</div>
				<input type="button" value="赞赏" class="zan-btn">
			</div>
		</form>
	</div>
</body>
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/weipay.js"></script>
</html>