<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心-聊天详情</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/mine.css">
	<link rel="stylesheet" href="css/user.css">
</head>
<body class="bg-eb">
	<div class="container">
		<!-- header -->
		<div class="header">
			<img src="images/icon1_15.png" alt="" onclick="history.back()">
			<span>何涛</span>
		</div>
		<!-- /header -->

		<!-- warp -->
		<div class="warp">
			<div class="width lt">
				<ul>
					<div class="width center blue"><a href="#" id="more" ts="2016-06-01" uid="45407251">查看更多消息</a></div>
					<li class="send-right">
						<div class="tx-icon f_r img100"><img src="images/132.jpg"></div>
						<div class="sendbox">
							<div class="send-tbody f_r">445
							<em class="send-cusp"></em>
						</div>
						</div>
						
					</li>
					<li  class="send-right">
						<div class="tx-icon f_r img100"><img src="images/132.jpg"></div>
						<div class="sendbox">
							<div class="send-tbody f_r">安静时分最合适的旋律标签： 英语 流行 经典好歌 安静 学习
							<em class="send-cusp"></em>
						</div>
						</div>
					</li>
					<div class="width center c999 mt10">----- 上次聊天 06月15日 09点39分 -----</div>
					<li class="send-left">
						<div class="tx-icon f_l img100"><img src="images/132.jpg"></div>
						<div class="sendbox">
							<div class="send-tbody2 f_l">445
								<em class="send-cusp2"></em>
							</div>
						</div>
						
					</li>
					<li class="send-left">
						<div class="tx-icon f_l img100"><img src="images/132.jpg"></div>
						<div class="sendbox">
							<div class="send-tbody2 f_l">安静时分最合适的旋律标签： 英语 流行 经典好歌 安静 学习
								<em class="send-cusp2"></em>
							</div>
						</div>
						
					</li>
				</ul>
			</div>

			<div class="chat-bottom width">
		        <input type="hidden" name="to_user_id" id="to_user_id" value="1">
				<textarea class="messagebox" name="message" id="messageContent" placeholder="消息内容..."></textarea>
				<button id="msgPerSubmit" class="submit-button">发送</button>
			</div>
		<!-- /warp -->

		
	</div>
</body>
<script src="js/jquery-2.2.4.min.js"></script>
<script src = 'js/mine.js'></script>
<script src="js/user.js"></script>
</html>