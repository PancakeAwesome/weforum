$('.shousuo').click(function(){
	$(this).find('.list-theme').toggle();
	// swap
	var n = $(this).find('img').attr('substt');
	var s = $(this).find('img').attr('src');
	$(this).find('img').attr('src',n);
	$(this).find('img').attr('substt',s);
});