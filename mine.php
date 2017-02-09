<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/mine.css"/>
	<script type="text/javascript" src="js/jweixin-1.0.0.js"></script>
</head>
<body>
	<div class="container">

<div class="header">
	<img src="images/icon1_15.png" alt="">
	<span>我的用户中心</span>
</div>
<ul class="content-wrap">
	<li class="user-info">
	   <img src="http://wx.qlogo.cn/mmopen/43XPUjyWlSHia5scxqtm75wxJyHaia9U3YibUotGlmic1NqlrOZibGP8fATqicBvTdnXFoM0gnOnEMBSnqAzicsltF4XMSYkLFJr7Oh/0" class="headImg" alt="">
		<div>
			<p class="username">Susie</p>
			<p>2015-12-14</p>
		</div>
		<!--  
		<div class="modify">
			<a href="#">修改</a> 
			<img src="images/post-big1_11.jpg" alt="">
		</div>
		-->
	</li>
	<li class="listborder">
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_01.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="myPost.php">我的发帖</a></li>
			<li class="right"><span>0</span> <img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_02.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="myJoin.php">我参与的</a></li>
			<li class="right"><span>0</span> <img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_03.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="myAward.php">赏金中心</a></li>
			<li class="right"><img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
	</li>
	<li class="listborder">
		<!--  
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_04.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="#">我的聊天</a></li>
			<li class="right"><span>0</span> <img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
		-->
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_04.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="messageSys.php">系统消息</a></li>
			<li class="right"><span>0</span> <img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_05.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="messagePer.php">私信</a></li>
			<li class="right"><span>0</span> <img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_06.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="myPointRecord.php">我的积分</a></li>
			<li class="right"><img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
	</li>
	<li class="listborder">
		<ul class="mypost list clearfix">
			<li><img src="images/post-big-pic-09_09.png" alt="" class="left-img"></li>
			<li style="margin-left: 5px;"><a href="user-aboutus.php">关于我们</a></li>
			<li class="right"><img src="images/icon1_13.png" alt="" onclick="#"></li>
		</ul>
	</li>
</ul>
<!-- 蒙板 -->
<div class="mask-ui"></div>

    <!-- footer -->
    <div class="menu">
            	<div class="home " substt='images/post-big2_02.png' onclick="turnToNextPage('index.php')">
    		<img src="images/post-big2_01.png"> <span>首页</span>
    	</div>
    	    	
    	    	<div class="module" substt='images/post-big2_04.png' onclick="turnToNextPage('section.php')">
    		<img src="images/post-big2_03.png"> <span>版块</span>
    	</div>
    	    	
    	    	<div class="post" substt='images/post-big2_07.png' onclick="turnToNextPage('post.php')">
    		<img src="images/post-big2_06.png"> <span>发帖</span>
    	</div>
    	    	
    	    	<div class="mine active" substt='images/post-big2_08.png' onclick="turnToNextPage('mine.php')">
    		<img src="images/post-big2_09.png"> <span>我的</span>
		</div>
		    	
    	<div class="cf"></div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"/></script>
<script type="text/javascript" src="js/mine.js"/></script>
<script type="text/javascript">
function turnToNextPage(url)
{
	window.location.href = url;
}
</script>
</body>
</php>