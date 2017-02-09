<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- <link rel="stylesheet" href="css/home.css"> -->
	<link rel="stylesheet" href="css/post.css">
</head>
<body>
	<div class="container">
		<form action="">
			<input type="text" class="title" placeholder="标题，可以不填...">
			<input type="text" class="title" placeholder="标签，可以不填...">
			<textarea name="" id="" cols="30" rows="10" placeholder="这一刻的想法..."></textarea>

			<ul class="post-wrap-pic-select clearfix bz" id="imgList" style="display:none">
		    <!-- 上传示例图片 -->
	        	<li class="fl rel">
			        <img class="temp_img_one" src="images/0.jpeg" id="loc_img_8428442" imgid="8428442" style="width:100%;">
			        <i class="abs temp_clear_img" style="cursor:pointer;"></i>
			        <div class="img_loading" id="loc_loading_8428442" style="display: none;">
			            <div class="img_loading-bar"></div>
			            <img src="images/img_loading.gif" class="img_upload_loading">
			        </div>
			    </li>
			    <!-- 上传示例图片 -->
	            <li class="fl rel temp-upload-img" id="btn-addimg" style="cursor:pointer;"><img src="images/success-select-column-close-add02.png" style="width:100%;"></li>
	        </ul>

	        <div class="show-voice-wrap bk" style="display:none"">
		        <div class="post-voice-box-rp rel" data-localid="{LOCALID}">
		            <div class="post-voice-box-pause"></div>
		            <span class="abs post-voice-close temp-voice-close" data-voicetype="{TYPE}"></span>
		        </div>
		        <div class="post-rp-voice-time rel">3''</div>
		        <audio id="myvoice"><source src="{MP3PATH}" type="audio/mpeg"></audio>
		    </div>

			<div class="pay cf">
				<label><input type="checkbox" name="isPay" id="isPay" value="1">成为付费帖</label>
				<span id="pointNumDiv" style="display:none;">要求付费阅读积分：<input type="text" name="pointNum" value=""></span>
			</div>

			<div class="tab">
				<div>
					<img src="./images/post-big2_22.png" alt="">
					<a href="#">点击发送位置</a>
				</div>
				<input type="submit" class="submit" value="发表">
			</div>
			<div class="menu clearfix" style="position: inherit;">
				<div class="face" tatd='./images/post-big2_11.png'>
					<img src="./images/post-big2_10.png">
					<!-- <div></div> -->
					<span>表情</span>
				</div>
				<div class="pic" tatd='./images/post-big2_13.png'>
					<img src="./images/post-big2_12.png">
					<span>图片</span>
				</div>
				<div class="voice" tatd='./images/post-big2_15.png'>
					<img src="./images/post-big2_14.png">
					<span>语音</span>
				</div>
				<div class="award" tatd='./images/post-big2_19.png'>
					<img src="./images/post-big2_18.png">
					<span>悬赏</span>
				</div>
				<div class="cf"></div>
			</div>
			<div class="mask-ui">
			</div>
			<!-- 悬赏积分输入框 -->
			<div class="post-reward">
				<div style="font-size:.8rem;padding: 20px;border-bottom: 1px solid #E0DBDB;">如果您设置的是悬赏帖请在7天内设置最佳回帖最佳回帖者获得悬赏金逾期未设置悬赏金自动支付给第一个回帖者</div>
				<input type="text" name="point_reward" id="point_reward" placeholder="请输入悬赏积分，1-999积分" style="width:100%;padding: 15px;"><br />
				<input type="button" name="post_reward" value="取消" class=" award-btn-cancel">
				<input type="button" name="return_to_index" value="确认" class="pay-point award-btn-ok">
			</div>
		</form>
		<div class="blank">
			<div class="post-voice-wrap bk" style="display:none">
	        	<div class="cancel-btn">取消</div>
	        	 <div class="framehovertree">
					<div class="centerhovertree"></div>
				</div>
	        	<div style="margin-top: 20px;font-size:.8rem">点一下录音</div>
	        </div>
	        <!-- add btn group -->
	        <div class="btn-group">
	        	<img src="images/add.png" alt="" class="add" substt='images/cancel.png' style="
	            /* position: absolute; */
	            left: 10px;
	            bottom: 80px;position:absolute;width:2rem;">
	            <a href="#">
	            	<img src="images/home.png" alt="" class="btn-group-child" style="
	            left: 10px;
	            bottom: 170px;">
	            </a>
	        	<a href="#">
	        		<img src="images/section.png" alt="" class="btn-group-child" style="
	            left: 50px;
	            bottom: 150px;">
	        	</a>
	        	<a href="#">
	        		<img src="images/post.png" alt="" class="btn-group-child" style="
	            left: 80px;
	            bottom: 120px;">
	        	</a>
	        	<a href="#">
	        		<img src="images/mine.png" alt="" class="btn-group-child" style="
	            left: 100px;
	            bottom: 80px;">
	        	</a>
	        </div>
		</div>
		<div class="menu">
            	<div class="home " substt="images/post-big2_02.png" onclick="turnToNextPage('index.php')">
    		<img src="images/post-big2_01.png"> <span>首页</span>
    	</div>
    	    	
    	    	<div class="module" substt="images/post-big2_04.png" onclick="turnToNextPage('section.php')">
    		<div class="arrow" style="left: 114.667px;"></div>
    		<img src="images/post-big2_03.png"> <span>版块</span>
    	</div>
    	    	
    	    	<div class="post active" substt="images/post-big2_07.png" onclick="turnToNextPage('post.php')">
    		<img src="images/post-big2_07.png"> <span>发帖</span>
    	</div>
    	    	
    	    	<div class="mine" substt="images/post-big2_08.png" onclick="turnToNextPage('mine.php')">
    		<img src="images/post-big2_08.png"> <span>我的</span>
		</div>
    	    	
    	<div class="cf"></div>
    </div>
	</div>
</body>
<script src="js/jquery-2.2.4.min.js"></script>
<script src='js/post.js'></script>
</html>