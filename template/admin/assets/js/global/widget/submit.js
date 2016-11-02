
var submit = (function(){
	var button = new buttonWidget();
	var submitMain = function(option){
		var formData = $.extend(new formParams(option.form) , option.appendParames);
		
		var $button = isset(option.target) ? option.target : false;


		$.each(option.rule , function(key, value) {
			option.rule[key].other = !isset(option.rule[key].other) ? formData.target[key] : option.rule[key].other;
		});
		
		var params = paramsRule.check(formData , option.rule);
		data = {};
		if($button != false) button.loading(option.target)

		
		// 用户是否填写了错误处理方法
		if( ! isset(option.success)) option.success = function(data){
			popup.toast(option.message);
			if($button != false) button.reLoading(option.target);
			
			setTimeout(function(){
				window.location.reload();
			} , 1000)
		};
		if( ! isset(option.error)) option.error = function(data , errorType){
			var message = '';
			switch(errorType){
				case 'string' : message = data;break;
				case 0 : message = data.text;break;
				case 1 : message = data.message;break;
			}
			if(errorType == 'string' || errorType == 1){
				popup.toast(message);
			}else{
				popup.inputToast(message , data.other)
			}
			if($button != false) button.reLoading(option.target);
		};




		if( ! params){
			option.error(paramsRule.reslut() , 0)
			return false;
		}
		option.api(params).then(function(message){
			option.success(message);
			return true;
		}, function(error){
			option.error(error , typeof error == 'string' ? 'string' : 1)
			return false;
		});


	};
	return submitMain;
})(jQuery);
