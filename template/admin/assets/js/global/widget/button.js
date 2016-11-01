
/**
 * 按钮组建、包含了按钮的加载等操作
 * @param  {[type]} 	        [description]
 * @param  {String} buttonValue [description]
 * @return {[type]}             [description]
 */
var buttonWidget = (function(){
	var public = function(){} , 
		buttonValue = '';
	public.prototype.loading = function($this){
		console.log($this)
		$this.attr('disabled' , true)
		.addClass('disabled')
		.prepend('<i class="fa fa-spinner fa-pulse fa-3x fa-fw" id="js-loading" style="font-size:14px;"></i>')
	}
	public.prototype.reLoading = function($this){
		$this.attr('disabled' , false)
		.removeClass('disabled')
		.find('#js-loading')
		.remove()
		.empty();
	}
	return public;
})(jQuery);