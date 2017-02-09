<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/home.css"/><link rel="stylesheet" type="text/css" href="css/section.css"/>	<script type="text/javascript" src="js/jweixin-1.0.0.js"></script>
</head>
<body>
	<div class="container">
		<ul>
	    	<li class="shousuo">
			<ul class="list-item rel">
				<li><span>评论</span></li>
				<img src="images/jiantoushang.png" alt="" class="abs" substt='images/jiantouxia.png'>
			</ul>
					<ul class="list-theme">
				<li><a href="1.php">商品评论</a></li>
			</ul>
				</li>
			<li class="shousuo">
			<ul class="list-item rel">
				<li><span>普通帖子</span></li>
				<img src="images/jiantoushang.png" alt="" class="abs" substt='images/jiantouxia.png'>
			</ul>
					<ul class="list-theme">
				<li><a href="2.php">普通帖</a></li>
			</ul>
				</li>
		</ul>
	<div class="foot"></div>
	    <!-- footer -->
	    <div class="menu">
	            	<div class="home " substt='images/post-big2_02.png' onclick="turnToNextPage('index.php')">
	    		<img src="images/post-big2_01.png"> <span>首页</span>
	    	</div>
	    	    	
	    	    	<div class="module active" substt='images/post-big2_04.png' onclick="turnToNextPage('section.php')">
	    		<img src="images/post-big2_04.png"> <span>版块</span>
	    	</div>
	    	    	
	    	    	<div class="post" substt='images/post-big2_07.png' onclick="turnToNextPage('post.php')">
	    		<img src="images/post-big2_06.png"> <span>发帖</span>
	    	</div>
	    	    	
	    	    	<div class="mine" substt='images/post-big2_08.png' onclick="turnToNextPage('mine.php')">
	    		<img src="images/post-big2_08.png"> <span>我的</span>
			</div>
    	    	
    	<div class="cf"></div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"/></script><script type="text/javascript" src="js/section.js"/></script><script type="text/javascript">
function turnToNextPage(url)
{
	window.location.href = url;
}
</script>
</body>
</html>