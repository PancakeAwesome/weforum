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

$('.home,.header img').click(function() {
	window.location.href = "index.php"
});

