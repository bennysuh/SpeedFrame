function isset(contxt){
	return typeof contxt != 'undefined';
}


// 处理左侧菜单点击事件
if(typeof menuActive != 'undefined'){
	$(".left-menu li").eq(menuActive).find('a').addClass('active');
	$(".son-menu .item").eq(menuActive).css('display' , 'block');
	$(".son-menu .item li").removeClass('active');
	$(".son-menu .item").eq(menuActive).find("li").eq(menuSongActive).addClass('active');
}



