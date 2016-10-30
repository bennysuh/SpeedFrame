/**
 * 获取表单中用户要提交的数据
 * @param  {Object} ){	var params        [description]
 * @return {[type]}         [description]
 */
var formParams = (function(){
	var params = {target : {}};
	var formMain = function(targetFrom){
		
		$targetFrom = $(targetFrom).find('input , textarea , button');
		$targetFrom.each(function(key , value){
			var $targetFromElement = $(value) , 
				id = $targetFromElement.attr('id');
			if(typeof id == 'string' && id.indexOf('js-') >= 0){
				var paramsName = id.replace('js-' , '');
				params[paramsName] = $targetFromElement.val();
				params.target[paramsName] = $targetFromElement;
			}


		});
		return params;
	};
	return formMain;
})(jQuery);
