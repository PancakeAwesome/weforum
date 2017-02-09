<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>帖子详情</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/detail.css"/>
	<link rel="stylesheet" type="text/css" href="css/home.css"/> 
   <script type="text/javascript" src="js/jweixin-1.0.0.js"></script>
</head>

<body class="bg-fff">
	<div class="container">

<div class="container">
	<div class="header">
	    <div class="back" style="width:22px;">
	        <a style="display:block;" class="back-bt" href="javascript:history.back()"></a>
	    </div>
	    <div class="theme">
	        <a class="th" href="index.php">宝宝粉</a>
	    </div>
	    <div class="cf">
	    </div>
	</div>
	<div class="item" style="margin-top:50px;">
		<div class="headImg">
			<a href="imine.php" class="headImg">
				<img src="images/0.jpeg" class="headImg">
			</a>	
		</div>
		<div class="title">
			<span class="name">Susie</span>
			<div class="level">V.1</div>
						<br>
			<span class="date">06-30</span>
			<span class="visited">浏览106</span>
			<input type="hidden" name="oldPostId" id="oldPostId" value="100">
		</div>
	<!-- <img src="/images/post-big1_11.jpg" alt="" class="modify"> -->
		<div class="content">
			<h4></h4>
			<p>jdjsjsj</p>
			
			<!-- 语音播放  -->
			<div class="comvoice clearfix">             
				<div class="voice-box-rp voice-box">                
					<div class="voice-box-pause"></div>            
					<audio preload="none" id="audio-4099003" voiceid="4099003">
						<source src="kqSFCHJjSkgODQFv_qxnmACGmNkE-Ie0j4wjZgK4v-PWieqzCjVYtx_eQjgc1LcS" type="audio/mpeg">
					</audio>                    
				</div>
				<div class="rp-voice-time rel">3''</div>
			</div>
			<!-- 图片显示 -->
			<div class="play-img">
				<img src="images/172016372310f1f894494a982b59a69f5278dd.jpg@0o_0l_100sh_300w_90q.src" fullsrc="images/172016372310f1f894494a982b59a69f5278dd.jpg" style="max-height:200px;max-width:100%;">
			</div>
		</div>
		<div class="hasmanage">
			<div>
				<a href="award.php"><input type="button" value="赞赏" class="button"></a>
			</div>
			<div>
				<span>共0人，0次赞赏</span>
			</div>
					</div>
	</div>
	<div class="remark-fr">
		<div class="re-left">
			<span>全部评论</span>
		</div>
		<div class="re-right">
				<i class="detail-daoxu detail-zhengxu"></i>
				<span class="positive">顺序</span>
				<span class="inverted hint">倒序</span>
		</div>
		<div class="cf"></div>
	</div>
	<!-- 全部评论 -->
	<div class="remark-all" style="">
			<div class="headImg">
				<a href="/bbs/index.php/Mobile/User/userHome/user_id/1.html">
				<img src="http://wx.qlogo.cn/mmopen/43XPUjyWlSHia5scxqtm75wxJyHaia9U3YibUotGlmic1NqlrOZibGP8fATqicBvTdnXFoM0gnOnEMBSnqAzicsltF4XMSYkLFJr7Oh/0" class="headImg">	
				</a>
			</div>
			<div class="title">
				<span class="name">Susie</span>
				<div class="level">V.1</div><br>
				<span class="date">07-01</span>
				<span class="visited">2楼</span>
			</div>
			<div class="content">
				<p>12313</p>
							<div class="action love toPraise" data-value="107">
					<span><img src="/bbs/Public/Mobile//images/post-big1_08.jpg"></span>
					<span class="zan-107-1">赞<em>0</em></span>
					<input type="hidden" class="post_id" value="107">
					<input type="hidden" class="user_id" value="1">
				</div>
							<div class="action comment">
					<span><img src="/bbs/Public/Mobile//images/post-big1_07.jpg" id="remark"></span>
					<span class="pj-107-1">评<em>0</em></span>
					<input type="hidden" class="user_name" value="Susie">
					<input type="hidden" class="user_id" value="1">
					<input type="hidden" class="post_id" value="98">
					<input type="hidden" class="answer_post_id" value="107">
				</div>
				<a href="/bbs/index.php/Mobile/Post/award/user_id/1/post_id/107.html">
				<div class="action award">
					<span><img src="/bbs/Public/Mobile//images/post-big1_01.jpg"></span>
					<span>赏0</span>
				</div></a>
				<div class="cf"></div>
			</div>
		</div>
	<div class="cf hint" id="loading">正在加载</div>
	<div class="hint" id="loaded">已加载全部数据</div>
	<!-- 评论框 -->
	<?php include'public/text-reply.php' ?>
	<!-- footer -->
	<div class="footer">
				<div class="transmit" onclick="window.location.href='/bbs/index.php/Mobile/post/postShare/user_id/1/post_id/100.html'">
			<img src="images/icon1_06.png">
			<span>转</span>
		</div>
				<div class="remark">
			<img src="images/icon1_07.png">
			<span>评</span>
		</div>
		<div class="like toPraise-details" replace='/images/zaned.png' data-value="100" onclick="alert('点赞成功！')">
			<input type="hidden" name="like-post-id" id="like-post-id" value="100">
			<img id="like-img" src="images/icon1_10.png">
			<span>赞</span>
		</div>
				<div class="cf"></div>
	</div>
	<!-- 侧边栏 -->
	<div class="float-right-box">
		<a style="color:white;margin-left: 2px;padding: 4px 12px 0 7px;display:block;" href="/bbs/index.php/Mobile/Index/index.html" class="home">
			<i class="homeicon"></i>
		</a>
		<a onclick="window.location.reload();" class="refresh">刷新</a>
	</div>
	<!-- 蒙板 -->
	<div class="mask-ui"></div>
	<!-- actionsheet -->
	<!-- <div class="actionsheet">
		<div class="report">
			<a href="#">举报</a>
		</div>
		<div class="cancel">取消</div>
	</div> -->
</div>

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script>
wx.config({
    debug: false,
    appId: 'wxc5c50e966f4917ed',
    timestamp: 1467278144,
    nonceStr: 'Bhkk3JbZ1FJkhnRW',
    signature: '23a9503fc9d2027d25f6ac1119b55f4be33ea016',
    jsApiList: [
        'playVoice',
        'pauseVoice',
        'stopVoice',
        'downloadVoice',
        'downloadImage',
    ]
});


var imgServerId;
var imgLocalId;
var voiceServerId;
var voiceLocalId;

imgServerId = 'fAsNzoOR5uAbVTFf0sMKkaZoeoAXvpXCKc0V5aRu9Dq9SvMcd_wtqLb9pE7rfCBM|V9j8o1B3BNv62luc5u5S62uyAcADFsbYlpha6Psq0sttxGvxCzTqcHbSpBFYzacO|';
voiceServerId = 'kqSFCHJjSkgODQFv_qxnmACGmNkE-Ie0j4wjZgK4v-PWieqzCjVYtx_eQjgc1LcS';

wx.ready(function () {
	wx.downloadVoice({
	    serverId: voiceServerId, // 需要下载的音频的服务器端ID，由uploadVoice接口获得
	    isShowProgressTips: 1, // 默认为1，显示进度提示
	    success: function (res) {
	    	voiceLocalId = res.localId; // 返回音频的本地ID
	    }
	});
});

//语音播放
$('.voice-box-rp').click(function(){
	wx.playVoice({
	    localId: voiceLocalId // 需要播放的音频的本地ID，由stopRecord接口获得
	});
});


//图片分割
var arrImgLocalId;
arrImageServer = imgServerId.split('|');
var i=0 , length = arrImageServer.length-1;

function getImgUrl(){
	wx.downloadImage({
 	serverId: arrImageServer[i], // 需要下载的图片的服务器端ID，由uploadImage接口获得
		isShowProgressTips: 1, // 默认为1，显示进度提示
		success: function (res) {
			imgLocalId = res.localId; // 返回图片下载后的本地ID
 			i++;
			$('.play-img').append("<img src='"+imgLocalId+"' fullsrc='"+imgLocalId+"' style='max-height:200px;max-width:100%;'>");
				
 			if(i < length)
 			{
 				getImgUrl();
 			}
		}
	});
}

$(document).ready(function(){
	setTimeout(getImgUrl, 100)
 });
</script>
</div>
</body>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script><script type="text/javascript" src="js/detail.js"></script><script type="text/javascript" src="js/post-action.js"></script>
</html>