	// var params = paramsRule.check(new formParams("#js-admin-login") , {
	// 	'username' : { max : 16 , min : 6 , name : '用户名'} ,
	// 	'password' : { max : 16 , min : 6 , name : '密码'} ,
	// });
	// if( ! params) console.log(paramsRule.reslut());

	// _api.admin.admin_user.login(params).then(function(){

	// }, function(){

	// })



var submit = (function(){
	var submitMain = function(option){
		var params = paramsRule.check(new formParams(option.form) , option.rule);
		if( ! params){
			option.error(paramsRule.reslut())
			return false;
		}
		option.api(params).then(function(message){
			option.success(message);
			return true;
		}, function(error){
			option.error(error)
			return false;
		})
	};
	return submitMain;
})(jQuery);
