//判断滚动条是否到达最底端
$(window).scroll(function(){
	if(($("body").height()-$("body,html").scrollTop())<=document.documentElement.clientHeight){
		$('#loaded').show();
	}else{
		$('#loaded,#loading').hide();
	}
});

$('.comment').click(function() {
	$('#textbox-replay,.mask-ui').show();
	
	var user_name = $(this).find('input:hidden').eq(0).val();
	$('#txtContentAdd').attr('placeholder','回复'+user_name+':');
	var user_id = $(this).find('input:hidden').eq(1).val();
	$('#userId').val(user_id);
	var post_id = $(this).find('input:hidden').eq(2).val();
	$('#postId').val(post_id);
	var answer_post_id = $(this).find('input:hidden').eq(3).val();
	$('#answerPostId').val(answer_post_id);
	$('#typeId').val(1)
});

$('.face').click(function() {
	$('#div-qqfaces').show();
});

$('.mask-ui').click(function() {
	$('.mask-ui,.actionsheet,#textbox-replay').hide();
});

$('.re-right').click(function() {
	if ($('.positive').css('display') == 'none') {
		//切换成正序
		$('.re-right i').removeClass('detail-daoxu');
		$('.positive').show();
		$('.inverted').hide();
	}else{
		$('.re-right i').addClass('detail-daoxu');
		$('.positive').hide();
		$('.inverted').show();
	}
});

$(".qqface-img").click(function(){
	var code = $(this).attr('code');
	var contentOld = $('#txtContentAdd').val();
	var contentNew = contentOld + code;
	$('#txtContentAdd').val(contentNew);
});

//取消回复
$('#cancle-reply-button').click(function(){
	$('.mask-ui,.actionsheet,#textbox-replay').hide();
});

//回复
$('.remark').click(function(){
	$('#textbox-replay,.mask-ui').show();
	$('#txtContentAdd').attr('placeholder','回复帖子:');
	
	var post_id = $("#oldPostId").val();
	$('#postId').val(post_id);
	$('#typeId').val('');
});

//跟帖与回复
$('#send-repley-button').click(function(){
	var userId = $('#userId').val();
	var postId = $('#postId').val();
	var content = $('#txtContentAdd').val();
	var typeId = $('#typeId').val();
	var answerPostId = $('#answerPostId').val();

	$.ajax({
			type:"POST",
			url:"/bbs/index.php/Mobile/Post/postAdd",
			data:{'user_id':userId,'old_post_id':postId,'content':content,'type_id':typeId,'answer_for_post_id':answerPostId},
			dataType:"json",
			async: false,
			success:function(data){
				//回复
				if(typeId==1){
					$('.pj-'+answerPostId+'-'+userId).html("评<em>"+data+"</em>");
					$('.mask-ui,.actionsheet,#textbox-replay').hide();
					alert('回复成功');
					window.location.reload();
				}
				//跟帖
				else{
					alert(data);
					window.location.reload();
				}
				
			}
	    });
});

//点赞(给发帖人)
$('.like').click(function(){
	var postId = $("#like-post-id").val();
	$.ajax({
		type:"POST",
		url:"/bbs/index.php/Mobile/PostPraise/postPraise",
		data:{'post_id':postId},
		dataType:"json",
		async: false,
		success:function(data){
			//改变图片
			$('#like-img').attr('src','');
		}
		
	});
	
});

//点赞(回复部分)
$('.love').click(function(){
	var postId = $(this).find('input:hidden').eq(0).val();
	var userId = $(this).find('input:hidden').eq(1).val();
	var typeId = 1;
	$.ajax({
		type:"POST",
		url:"/bbs/index.php/Mobile/PostPraise/postPraise",
		data:{'post_id':postId,'type_id':typeId},
		dataType:"json",
		async: false,
		success:function(data){
			//改变图片
			$('#like-img').attr('src','');
			//统计该回复有多少个赞
			$('.zan-'+postId+'-'+userId).html("赞<em>"+data.num+"</em>");
		}
		
	});
})


