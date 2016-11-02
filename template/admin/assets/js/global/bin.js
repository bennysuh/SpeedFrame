var popup = new popupWidget();
var dom = new Dom();

$(document).on('click', ".widget-checkbox", function(event) {
	$(this).toggleClass('active');
});
