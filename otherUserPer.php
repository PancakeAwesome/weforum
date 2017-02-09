<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/post.css"/>	<script type="text/javascript" src="js/jweixin-1.0.0.js"></script>
</head>
<body>
	<div class="container">


<div class="container">
	<form action="" method="post" id="form1">
		<input type="text" class="title" value="发送给：Susie" name="title">
		<input type="hidden" name="to_user_id" id="to_user_id" value="1"/>
		<textarea name="message" id="message" cols="30" rows="10" placeholder="清输入消息内容..."></textarea>
		<div class="tab">
			<input type="submit" class="submit" value="发送" id="posting"><br />
		</div>
	</form>
</div>


    <!-- footer -->
    <div class="menu">
            	<div class="home " substt='images/post-big2_02.png' onclick="turnToNextPage('/bbs/index.php/Mobile/index/index.html')">
    		<img src="images/post-big2_01.png"> <span>首页</span>
    	</div>
    	    	
    	    	<div class="module" substt='images/post-big2_04.png' onclick="turnToNextPage('/bbs/index.php/Mobile/forum/index.html')">
    		<img src="images/post-big2_03.png"> <span>版块</span>
    	</div>
    	    	
    	    	<div class="post" substt='images/post-big2_07.png' onclick="turnToNextPage('/bbs/index.php/Mobile/post/postAdd.html')">
    		<img src="images/post-big2_06.png"> <span>发帖</span>
    	</div>
    	    	
    	    	<div class="mine active" substt='images/post-big2_08.png' onclick="turnToNextPage('/bbs/index.php/Mobile/user/userHome.html')">
    		<img src="images/post-big2_09.png"> <span>我的</span>
		</div>
		    	
    	<div class="cf"></div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"/></script><script type="text/javascript" src="js/home.js"/></script><script type="text/javascript">
function turnToNextPage(url)
{
	window.location.href = url;
}
</script>
</body>
</html>