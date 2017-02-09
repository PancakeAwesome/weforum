/**
 * 贴子相关的动作，赞，转，评论，赏
 */

//点赞
$(document).on('click', ".toPraise", function(){
	var url = '/bbs/index.php/Mobile/postPraise/postPraise';
	var post_id = $(this).attr('data-value');
	var data = {post_id: post_id};
	var em = $(this).find('em');
	var oldNum = em.text();
	var newNum = parseInt(oldNum) + 1;
	
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: data,
		success: function(data){
			if(data.success == true)
			{
				em.text(newNum);
				alert('点赞成功!');
			}
			else
				alert('点赞失败或您已点赞过啦!');
		},
		error: function(){
			
		}
	});
});

//详细页点赞
$(document).on('click', ".toPraise-details", function(){
	var url = '/bbs/index.php/Mobile/postPraise/postPraise';
	var post_id = $(this).attr('data-value');
	var data = {post_id: post_id};
	
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: data,
		success: function(data){
			if(data.success == true)
			{
				alert('点赞成功!');
			}
			else
				alert('点赞失败或您已点赞过啦!');
		},
		error: function(){
			
		}
	});
});
//点击切换效果
$('.action').click(function() {
    var n,src;
    // 替换图片地址
    $('.action').each(function(){
        if ($(this).hasClass('active')) {
            src = $(this).find('img').attr('src');

            //swap src
            n = $(this).attr('substt');
            $(this).attr('substt',src);
            $(this).find('img').attr('src',n);

            $(this).removeClass('active');
        }
    });
    
    $(this).addClass('active');

    src = $(this).find('img').attr('src');
    n = $(this).attr('substt');
    $(this).attr('substt',src);
    $(this).find('img').attr('src',n);
});

$('.action h4,.action p').click(function() {
	window.location.href = 'detail.php'
});

$('.award').click(function() {
	window.location.href = 'weipay.php'
});

// 评论框的点击事件
$('#cancle-reply-button').click(function() {
	$('#textbox-replay').hide()
});

