<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/home.css"/>	<script type="text/javascript" src="js/jweixin-1.0.0.js"></script>
</head>
<body>
	<div class="container">

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script>
wx.config({
    debug: false,
    appId: 'wxc5c50e966f4917ed',
    timestamp: 1467277267,
    nonceStr: 'E2E6sG23vfPyDWnV',
    signature: '5bd46c9affc534b82cc12d96e3ba577863badda0',
    jsApiList: [
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'downloadVoice',
        'downloadImage',
    ]
});

</script>

<div class="homeHeader">
	<img src="images/131030195568079778@200x200.jpg" class="headImg">
	<div class="title">
		<a href="#" class="topic">话题<span>3</span></a>
		<i class="line">|</i>
		<a href="#" class="visited">访问<span>1198</span></a>
	</div>
<!-- 	<img src="http://j.pengxun.cn/content/images/index/searh.png" class="search"> -->
</div>
<!--  
<div class="sign">
	<div id="mark">
		<img src="images/post-big1_11.jpg">
		<span>签到</span>
	</div>
</div>
-->
<div class="tab">
	<a href="index.php" class="tab-active">全部</a>
	<a href="1.php" id="hot-topic" >热帖</a>
	<a href="1.php" id="award" >悬赏</a>
	<!-- 
	<div>
		<i class="line">|</i>
		<img src="images/post-big1_11.jpg" alt="" class="section">
	</div>
	-->
</div>

<div id="tycontainer">
    <input type="hidden" name="page_flag" id="page_flag" value="common"/>

    <div id="pageinfo">
        <input type="hidden" id="page_num_total" name="page_num_total" value="11"><input type="hidden" id="page_num_now" name="page_num_now" value="1">        <!-- <input type="hidden" id="page_num_total" name="page_num_total" value="10"> -->
        <!-- <input type="hidden" id="page_num_now" name="page_num_now" value="1"> -->
    </div>

        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览0</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/104.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/104.html'"></p>

        	        	<div class="comvoice clearfix">             
    			<div class="voice-box-rp voice-box voicearr-104">                
    				<div class="voice-box-pause"></div>            
    				<audio preload="none" id="audio-4099003" voiceid="4099003">
    					<source src="PiVUF7wLEWntpSSnvN5-cia1tYjH7vRyWGABvF-fNI5d2TA_HyoqOIOf66ikLW_B" type="audio/mpeg">
    				</audio>                    
    			</div>
    			<div class="rp-voice-time rel">6''</div>
    		</div>
    		
    		<!-- 音频JS部分 -->
    		<script>

    		var voiceServerId_104 = 'PiVUF7wLEWntpSSnvN5-cia1tYjH7vRyWGABvF-fNI5d2TA_HyoqOIOf66ikLW_B';
    		var voiceLocalId_104;
    		
			wx.ready(function () {
				wx.downloadVoice({
				    serverId: voiceServerId_104, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
				    isShowProgressTips: 1, // 默认为1，显示进度提示
				    success: function (res) {
				    	voiceLocalId_104 = res.localId; // 返回音频的本地ID
				    }
				});
			});
			
			//语音播放
			$('.voicearr-104').click(function(){
				alert(voiceLocalId_104);
				wx.playVoice({
				    localId: voiceLocalId_104 // 需要播放的音频的本地ID，由stopRecord接口获得
				});
			});
			</script>
    		    		
    		    		<div class="play-img imgarr-104"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = '|';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_104(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-104').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_104();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_104, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="104">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-104-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="104">
    				<input type="hidden" class="answer_post_id" value="104">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/104/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/104/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览0</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/103.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/103.html'"></p>

        	        	<div class="comvoice clearfix">             
    			<div class="voice-box-rp voice-box voicearr-103">                
    				<div class="voice-box-pause"></div>            
    				<audio preload="none" id="audio-4099003" voiceid="4099003">
    					<source src="PiVUF7wLEWntpSSnvN5-cia1tYjH7vRyWGABvF-fNI5d2TA_HyoqOIOf66ikLW_B" type="audio/mpeg">
    				</audio>                    
    			</div>
    			<div class="rp-voice-time rel">6''</div>
    		</div>
    		
    		<!-- 音频JS部分 -->
    		<script>

    		var voiceServerId_103 = 'PiVUF7wLEWntpSSnvN5-cia1tYjH7vRyWGABvF-fNI5d2TA_HyoqOIOf66ikLW_B';
    		var voiceLocalId_103;
    		
			wx.ready(function () {
				wx.downloadVoice({
				    serverId: voiceServerId_103, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
				    isShowProgressTips: 1, // 默认为1，显示进度提示
				    success: function (res) {
				    	voiceLocalId_103 = res.localId; // 返回音频的本地ID
				    }
				});
			});
			
			//语音播放
			$('.voicearr-103').click(function(){
				alert(voiceLocalId_103);
				wx.playVoice({
				    localId: voiceLocalId_103 // 需要播放的音频的本地ID，由stopRecord接口获得
				});
			});
			</script>
    		    		
    		    		<div class="play-img imgarr-103"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = '||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_103(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-103').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_103();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_103, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="103">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-103-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="103">
    				<input type="hidden" class="answer_post_id" value="103">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/103/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/103/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览0</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/102.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/102.html'"></p>

        	        	<div class="comvoice clearfix">             
    			<div class="voice-box-rp voice-box voicearr-102">                
    				<div class="voice-box-pause"></div>            
    				<audio preload="none" id="audio-4099003" voiceid="4099003">
    					<source src="Q6_0sIFZrUmg3FfnWpNmGNWoFckUCc9F30jdcICAtGIIoGfi8T15DM57P3HvTyTB" type="audio/mpeg">
    				</audio>                    
    			</div>
    			<div class="rp-voice-time rel">4''</div>
    		</div>
    		
    		<!-- 音频JS部分 -->
    		<script>

    		var voiceServerId_102 = 'Q6_0sIFZrUmg3FfnWpNmGNWoFckUCc9F30jdcICAtGIIoGfi8T15DM57P3HvTyTB';
    		var voiceLocalId_102;
    		
			wx.ready(function () {
				wx.downloadVoice({
				    serverId: voiceServerId_102, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
				    isShowProgressTips: 1, // 默认为1，显示进度提示
				    success: function (res) {
				    	voiceLocalId_102 = res.localId; // 返回音频的本地ID
				    }
				});
			});
			
			//语音播放
			$('.voicearr-102').click(function(){
				alert(voiceLocalId_102);
				wx.playVoice({
				    localId: voiceLocalId_102 // 需要播放的音频的本地ID，由stopRecord接口获得
				});
			});
			</script>
    		    		
    		    		<div class="play-img imgarr-102"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = '|||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_102(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-102').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_102();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_102, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="102">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-102-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="102">
    				<input type="hidden" class="answer_post_id" value="102">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/102/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/102/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览0</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/101.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/101.html'"></p>

        	        	<div class="comvoice clearfix">             
    			<div class="voice-box-rp voice-box voicearr-101">                
    				<div class="voice-box-pause"></div>            
    				<audio preload="none" id="audio-4099003" voiceid="4099003">
    					<source src="Q6_0sIFZrUmg3FfnWpNmGNWoFckUCc9F30jdcICAtGIIoGfi8T15DM57P3HvTyTB" type="audio/mpeg">
    				</audio>                    
    			</div>
    			<div class="rp-voice-time rel">4''</div>
    		</div>
    		
    		<!-- 音频JS部分 -->
    		<script>

    		var voiceServerId_101 = 'Q6_0sIFZrUmg3FfnWpNmGNWoFckUCc9F30jdcICAtGIIoGfi8T15DM57P3HvTyTB';
    		var voiceLocalId_101;
    		
			wx.ready(function () {
				wx.downloadVoice({
				    serverId: voiceServerId_101, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
				    isShowProgressTips: 1, // 默认为1，显示进度提示
				    success: function (res) {
				    	voiceLocalId_101 = res.localId; // 返回音频的本地ID
				    }
				});
			});
			
			//语音播放
			$('.voicearr-101').click(function(){
				alert(voiceLocalId_101);
				wx.playVoice({
				    localId: voiceLocalId_101 // 需要播放的音频的本地ID，由stopRecord接口获得
				});
			});
			</script>
    		    		
    		    		<div class="play-img imgarr-101"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = '||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_101(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-101').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_101();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_101, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="101">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-101-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="101">
    				<input type="hidden" class="answer_post_id" value="101">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/101/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/101/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览90</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/100.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/100.html'">jdjsjsj</p>

        	        	<div class="comvoice clearfix">             
    			<div class="voice-box-rp voice-box voicearr-100">                
    				<div class="voice-box-pause"></div>            
    				<audio preload="none" id="audio-4099003" voiceid="4099003">
    					<source src="kqSFCHJjSkgODQFv_qxnmACGmNkE-Ie0j4wjZgK4v-PWieqzCjVYtx_eQjgc1LcS" type="audio/mpeg">
    				</audio>                    
    			</div>
    			<div class="rp-voice-time rel">3''</div>
    		</div>
    		
    		<!-- 音频JS部分 -->
    		<script>

    		var voiceServerId_100 = 'kqSFCHJjSkgODQFv_qxnmACGmNkE-Ie0j4wjZgK4v-PWieqzCjVYtx_eQjgc1LcS';
    		var voiceLocalId_100;
    		
			wx.ready(function () {
				wx.downloadVoice({
				    serverId: voiceServerId_100, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
				    isShowProgressTips: 1, // 默认为1，显示进度提示
				    success: function (res) {
				    	voiceLocalId_100 = res.localId; // 返回音频的本地ID
				    }
				});
			});
			
			//语音播放
			$('.voicearr-100').click(function(){
				alert(voiceLocalId_100);
				wx.playVoice({
				    localId: voiceLocalId_100 // 需要播放的音频的本地ID，由stopRecord接口获得
				});
			});
			</script>
    		    		
    		    		<div class="play-img imgarr-100"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = 'fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_100(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-100').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_100();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_100, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="100">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-100-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="100">
    				<input type="hidden" class="answer_post_id" value="100">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/100/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/100/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览1</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/99.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/99.html'">语音测试</p>

        	        	<div class="comvoice clearfix">             
    			<div class="voice-box-rp voice-box voicearr-99">                
    				<div class="voice-box-pause"></div>            
    				<audio preload="none" id="audio-4099003" voiceid="4099003">
    					<source src="o6VgKrSP4CctK8CO2twIoVqc_CtnefcEqAVUDydYPM4ITtNZ22KVUtBwHUdjXJLk" type="audio/mpeg">
    				</audio>                    
    			</div>
    			<div class="rp-voice-time rel">4''</div>
    		</div>
    		
    		<!-- 音频JS部分 -->
    		<script>

    		var voiceServerId_99 = 'o6VgKrSP4CctK8CO2twIoVqc_CtnefcEqAVUDydYPM4ITtNZ22KVUtBwHUdjXJLk';
    		var voiceLocalId_99;
    		
			wx.ready(function () {
				wx.downloadVoice({
				    serverId: voiceServerId_99, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
				    isShowProgressTips: 1, // 默认为1，显示进度提示
				    success: function (res) {
				    	voiceLocalId_99 = res.localId; // 返回音频的本地ID
				    }
				});
			});
			
			//语音播放
			$('.voicearr-99').click(function(){
				alert(voiceLocalId_99);
				wx.playVoice({
				    localId: voiceLocalId_99 // 需要播放的音频的本地ID，由stopRecord接口获得
				});
			});
			</script>
    		    		
    		    		<div class="play-img imgarr-99"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = '|fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_99(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-99').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_99();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_99, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="99">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-99-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="99">
    				<input type="hidden" class="answer_post_id" value="99">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/99/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/99/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览1</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/98.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/98.html'">特工更为合适</p>

        	    		
    		    		<div class="play-img imgarr-98"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = 'y2vDxANxpCPUuqtSaKVpMbJpys5L-vOMdgCqJhnO5fjIE_5WZ9K4zcuaLrD6NNNK|IScxa2zatuTBS-ZVpf-C7wgI_aqd1p_BkAQX_3gY5evteHP8k4eNeHJFSP4sE3Lv||fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_98(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-98').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_98();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_98, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="98">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-98-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="98">
    				<input type="hidden" class="answer_post_id" value="98">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/98/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/98/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览0</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/97.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/97.html'"></p>

        	    		
    		    		<div class="play-img imgarr-97"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = 'Ime3bI2VW45CDyB4VBpQipgf-Y08sONd4GHtoeobv4sCZ9KrSe4xbBF07Tz4wYSv|Uiv_LMa7afysNWaSH6gD814mVVHTsAdE8OJ4c9wyfNnCKiuNavGlnDUOZdf7LcI_|y2vDxANxpCPUuqtSaKVpMbJpys5L-vOMdgCqJhnO5fjIE_5WZ9K4zcuaLrD6NNNK|IScxa2zatuTBS-ZVpf-C7wgI_aqd1p_BkAQX_3gY5evteHP8k4eNeHJFSP4sE3Lv||fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_97(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-97').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_97();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_97, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="97">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-97-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="97">
    				<input type="hidden" class="answer_post_id" value="97">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/97/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/97/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览1</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/96.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/96.html'">test</p>

        	    		
    		    		<div class="play-img imgarr-96"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = 'ZUPH6uxj7a9I-fjGy9Wq5HS17mbHGEJ4nZNalfLuPTJ93ro2qVBQ2KT758kOo_Dv|Ime3bI2VW45CDyB4VBpQipgf-Y08sONd4GHtoeobv4sCZ9KrSe4xbBF07Tz4wYSv|Uiv_LMa7afysNWaSH6gD814mVVHTsAdE8OJ4c9wyfNnCKiuNavGlnDUOZdf7LcI_|y2vDxANxpCPUuqtSaKVpMbJpys5L-vOMdgCqJhnO5fjIE_5WZ9K4zcuaLrD6NNNK|IScxa2zatuTBS-ZVpf-C7wgI_aqd1p_BkAQX_3gY5evteHP8k4eNeHJFSP4sE3Lv||fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_96(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-96').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_96();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_96, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="96">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-96-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="96">
    				<input type="hidden" class="answer_post_id" value="96">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/96/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/96/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
        <div class="item">
        <div class="headImg" onclick="window.location.href='otherUserHome.php'">
        	<img src="images/0.jpeg" class="headImg">	
        </div>
        <div class="title">
        	<span class="name">Susie</span>
        	<div class="level">V.1</div>
        	        	<br>
        	<span class="date">06-30</span>
        	<span class="visited">浏览3</span>
        </div>
        <div class="content">
        	<h4 onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/95.html'"></h4>
        	<p onclick="window.location.href='/bbs/index.php/Mobile/post/postBrowse/post_id/95.html'">test</p>

        	    		
    		    		<div class="play-img imgarr-95"></div>
    		
    		<!-- 图片JS部分 -->
    		<script>
			var imgServerId;
			var imgLocalId;
			imgServerId = 'ZUPH6uxj7a9I-fjGy9Wq5HS17mbHGEJ4nZNalfLuPTJ93ro2qVBQ2KT758kOo_Dv|ZUPH6uxj7a9I-fjGy9Wq5HS17mbHGEJ4nZNalfLuPTJ93ro2qVBQ2KT758kOo_Dv|Ime3bI2VW45CDyB4VBpQipgf-Y08sONd4GHtoeobv4sCZ9KrSe4xbBF07Tz4wYSv|Uiv_LMa7afysNWaSH6gD814mVVHTsAdE8OJ4c9wyfNnCKiuNavGlnDUOZdf7LcI_|y2vDxANxpCPUuqtSaKVpMbJpys5L-vOMdgCqJhnO5fjIE_5WZ9K4zcuaLrD6NNNK|IScxa2zatuTBS-ZVpf-C7wgI_aqd1p_BkAQX_3gY5evteHP8k4eNeHJFSP4sE3Lv||fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|||||';
			
			//图片分割
			var arrImgLocalId;
			arrImageServer = imgServerId.split('|');
			var i=0 , length = arrImageServer.length-1;
			
			function getImgUrl_95(){
				wx.downloadImage({
			 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
					isShowProgressTips: 1, // 默认为1，显示进度提示
					success: function (res) {
						imgLocalId = res.localId; // 返回图片下载后的本地ID
			 			i++;
						$('.imgarr-95').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
							
			 			if(i < length)
			 			{
			 				getImgUrl_95();
			 			}
					}
				});
			}
			
			$(document).ready(function(){
				setTimeout(getImgUrl_95, 100)
			 });
			</script>
    		    		
        	                <div class="action love toPraise notactive" substt='images/zaned.png' data-value="95">
            		<span><img src="images/post-big1_08.jpg"></span>
            		<span>赞<em>0</em></span>
            	</div>
        	        	
        	                <div class="action comment notactive" substt='images/post-big1_12.jpg'>
            		<span><img src="images/post-big1_07.jpg" id="remark"></span>
            		<span class="pj-95-1">评<em>0</em></span>
            		<input type="hidden" class="user_name" value="Susie">
    				<input type="hidden" class="user_id" value="1">
    				<input type="hidden" class="post_id" value="95">
    				<input type="hidden" class="answer_post_id" value="95">
            	</div>
        	        	
        	        	    <div class="action translate notactive" substt='images/post-big2_07.png' onclick="window.location.href='/bbs/index.php/Mobile/Post/postShare/post_id/95/user_id/1.html'">
            		<span><img src="images/post-big2_06.jpg"></span>
            		<span>转<em>0</em></span>
            	</div>
        	        	
        	        	    <div class="action award notactive" substt='images/post-big1_02.jpg' onclick="window.location.href='/bbs/index.php/Mobile/Post/reward/post_id/95/user_id/1.html'">
            		<span><img src="images/post-big1_01.jpg"></span>
            		<span>赏<em>0</em></span>
            	</div>
        	        	
        	<div class="cf"></div>
    	</div>
    	<!-- 评论框 -->
    </div>
    </div>

    <?php include'public/text-reply.php' ?>
    <!-- footer -->
    <div class="menu">
            	<div class="home active " substt='images/post-big2_02.png' onclick="turnToNextPage('/bbs/index.php/Mobile/index/index.html')">
    		<img src="images/post-big2_02.png"> <span>首页</span>
    	</div>
    	    	
    	    	<div class="module" substt='images/post-big2_04.png' onclick="turnToNextPage('/bbs/index.php/Mobile/forum/index.html')">
    		<img src="images/post-big2_03.png"> <span>版块</span>
    	</div>
    	    	
    	    	<div class="post" substt='images/post-big2_07.png' onclick="turnToNextPage('/bbs/index.php/Mobile/post/postAdd.html')">
    		<img src="images/post-big2_06.png"> <span>发帖</span>
    	</div>
    	    	
    	    	<div class="mine" substt='images/post-big2_08.png' onclick="turnToNextPage('/bbs/index.php/Mobile/user/userHome.html')">
    		<img src="images/post-big2_08.png"> <span>我的</span>
		</div>
    	    	
    	<div class="cf"></div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"/></script><script type="text/javascript" src="js/index/dataLazyLoad.js"/></script><script type="text/javascript" src="js/index/tyloading.js"/></script><script type="text/javascript" src="js/home.js"/></script><script type="text/javascript" src="js/post-action.js"/></script><script type="text/javascript">
function turnToNextPage(url)
{
	window.location.href = url;
}
</script>
</body>
</html>