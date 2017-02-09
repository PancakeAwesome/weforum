// 初始化js效果
$(function(){
	$('.load,.gotop').hide();
});

$('.modify').click(function() {
	$('.actionsheet,.mask-ui').show();
});

$('.pic').click(function(){
	$('.post-wrap-pic-select').show();
});

$('.comment').click(function() {
	$('#textbox-replay').toggle();
});

$('.face').click(function() {
	$('#div-qqfaces').show();
});

$('.refresh').click(function() {
	window.location.reload();
});

$('#cancel-reply-button').click(function() {
	$('.post-ping-kuang-bottom-content').hide();
});

// $('#mark').click(function() {
// 	window.location.href = "markpage.php"
// });

// $('.content p').click(function() {
// 	window.location.href = "detail.php"
// });

// $('.search').click(function() {
// 	$('.mask-ui,.index-search-all').show();
// });	

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

//判断滚动条是否到达最底端
// $(window).scroll(function(){
// 	if(($("body").height()-$("body,html").scrollTop())<=document.documentElement.clientHeight){
// 		$('.gotop,.load').show();
// 	}else{
// 		$('.gotop').hide();
// 	}
// });

// 回到顶部
// $('.gotop').click(function() {
// 	document.documentElement.scrollTop = document.body.scrollTop = 0;
// });

$('.mask-ui').click(function() {
	$('.mask-ui,.index-search-all,.plate-container,.arrow,.actionsheet,#textbox-replay').hide();
});

//点击切换效果
$('.menu>div').click(function() {
	var n,src;
	// 替换图片地址
	$('.menu>div').each(function(){
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


// 显示热帖，悬赏

$('.tab a').click(function() {
	//点击切换效果
	$('.tab a').each(function(){
		$(this).removeClass('tab-active');
	});
	
	$(this).addClass('tab-active');

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

$('.action h4,.action p ,.comvoice').click(function() {
	window.location.href = 'homePostDetails.php'
});

$('.award').click(function() {
	window.location.href = 'weipay.php'
});

// 评论框的点击事件
$('#cancle-reply-button').click(function() {
	$('#textbox-replay').hide()
});
