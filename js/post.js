//点击切换效果
$('.menu>div').click(function() {
	var n,src;
	//消除active效果
	$('.menu>div').each(function(){
		if ($(this).hasClass('active')) {
			
			src = $(this).find('img').attr('src');
			n = $(this).attr('tatd');
			$(this).attr('tatd',src);
			$(this).find('img').attr('src',n);

			$(this).removeClass('active');
		}
	});

	$(this).addClass('active');
	//swap
	src = $(this).find('img').attr('src');
	n = $(this).attr('tatd');
	$(this).attr('tatd',src);
	$(this).find('img').attr('src',n);
});

$('.tab>div').click(function() {
	$('.tab a').text('定位中...');
})
// tab工具栏
$('.face').click(function() {
	$('.bk').hide();
	$('.post-qq-face-all').show();
});

$('.pic').click(function() {
	// $('.post-qq-face-all').toggle();
});

$('.voice').click(function() {
	$('.bk').hide();
	$('.post-voice-wrap').show();
});

/* 悬赏弹出  */
$('.award').click(function(){
	$('.mask-ui').show();
	$('.post-reward').show();
});

$('.mask-ui,.award-btn-cancel').click(function(){
	$('.mask-ui').hide();
	$('.post-reward').hide();
});


//发帖相关js

$(document).ready(function(){
	//付费阅读
	if($("#isPay").is(":checked")){
		$("#pointNumDiv").css('display','block');
	}else{
		$("#pointNumDiv").css('display','none');
	}
	
	//隐藏图片栏
	$("#showPic").css('display','none');
});

//勾选付费栏
$("#isPay").click(function(){
	if($("#isPay").is(":checked")){
		$("#pointNumDiv").css('display','block');
	}else{
		$("#pointNumDiv").css('display','none');
	}
	
});

//定位
$("#location").click(function(){
	wx.getLocation({
        success: function (res) {
			//调用百度API将经纬度转换成位置
			var latitude = res.latitude;
			var longitude = res.longitude;

            	// 百度地图API功能
    			var point = new BMap.Point(longitude,latitude);
    			var geoc = new BMap.Geocoder();    

    			var pt = point;
    			geoc.getLocation(pt, function(rs){
    				var addComp = rs.addressComponents;
    				var address = addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber;

    				$("#img-location").attr("src","/bbs/Public/Mobile/images/locationed.png");
    				$("#location").html(address);
    				$("#position").val(address);
    			});  

        },
        cancel: function (res) {
            alert('用户拒绝授权获取地理位置');
        }
    });
});

//发表贴子
$("#posting").click(function(){
	$("#form1").submit();
});

//录音删除
$('.voice-cancel').click(function(){
	$('.show-voice-wrap').css('display','none');
	$('#voiceId').val();
});

//发表语音
// $(".menu>div").click(function(){
// 	if($(this).attr('id') == 'voice'){
// 		$('.post-voice-wrap').show();
// 	}else{
// 		$('.post-voice-wrap').hide();
// 	}
// });

$(".cancel-btn").click(function(){
	$(".post-voice-wrap").hide();
});


$("#toBeCompleted").click(function(){
	$(".show-voice-wrap").show();
});

$(".qqface-img").click(function()
{
	var code = $(this).attr('code');
	var contentOld = $('#content').val();
	var contentNew = contentOld + code;
	$('#content').val(contentNew);
});

//删除图片
$('.temp_clear_img').click(function(){
	$(this).css('display','none');
	alert('删除图片');
});

$(".framehovertree").click(function(){
	$(".framehovertree").css('background-color','black');
	$(".framehovertree").css('border-color','black');
	$('.framehovertree').attr('id','toBeCompleted');
	$("#toBeCompleted").click(function(){
		$(".show-voice-wrap").show();
		$(".post-voice-wrap").hide();
	});
});

$(".post-voice-box-rp").click(function(){
	// 语音播放切换图片
});


//确认悬赏积分支付
$('.pay-point').click(function(){
	var post_point = $('#point_reward').val();
	if(isNaN(post_point) || post_point=='' || post_point<=0 || post_point>1000){
		alert('请填写正确的积分');
		return false;
	}
	
	//ajax判断用户论坛积分是否充足
	$.ajax({
		type:"POST",
		url:"/bbs/index.php/Mobile/User/userBbsPoint",
		data:{'post_point':post_point},
		dataType:"json",
		async: false,
		success:function(data){
			if(data.success == true){
				$('#is_reward_post').val(1);
				$('#post_reward_point').val(post_point);
				
				$('.show-reward-wrap').show();
				$('#reward_point_num').html('悬赏'+post_point+'积分');
				$('.mask-ui').hide();
			}else{
				alert('论坛积分不足，无法悬赏');
				$('.mask-ui').hide();
				return false;
			}
		}
	});
	
});
//删除悬赏积分
$('.reward-cancel').click(function(){
	$('.show-reward-wrap').hide();
	$('#is_reward_post').val('');
	$('#post_reward_point').val('');
});

// 判断发帖内容是否为空
$('.submit').click(function() {
	if(($('.title').text() == '') && ($('textarea').text() == '') ){
		alert('输入内容不能为空！')
	}
});

// btn-group
$('.add').click(function() {
	var src = $('.add').attr('src');
	var sub = $('.add').attr('substt');

	$('.add').attr('src',sub);
	$('.add').attr('substt',src);

	$('.btn-group-child').toggle();

});

// footer
$('.module').click(function() {
	// $('.mask-ui,.plate-container,.arrow').show();
	window.location.href = 'section.php'
});


$('.post').click(function() {
	window.location.href = "post.php"
});


$('.mine').click(function() {
	window.location.href = "mine.php"
});

$('.home').click(function() {
	window.location.href = "index.php"
});