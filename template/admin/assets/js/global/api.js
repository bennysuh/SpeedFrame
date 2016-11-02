var _api = {} , isRequest = true;
var doAjax = function(options , isfile){
	$.ajax({
		url : options.url , 
		data : options.data , 
		cache: false,
		type: "POST",
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		dataType: "JSON",
		timeOut : 6000 , 
		content : window,
		success : function(data){
			if(data.state){
				options.promise.resolve(data);
			}else{
				options.promise.reject(data);
			}
		},
		error : function(data){
			try{
				var error = JSON.parse(data.responseText);
				options.promise.reject(error.message);
			}catch (e){
				options.promise.reject("请求出现异常，服务器繁忙或出现问题无法处理您的请求，请稍候再试！");
			}
		},
		complete : function(){
			isRequest = true;
		}
	});
}
function promise (data , url , type){
	var promise = $.Deferred();
	 doAjax({
		url : url,
		data : data , 
      	promise: promise,
	} , type);
	return promise;
}
function api(apiGroud , apiName , apiData){
	return promise(apiData, apiGroud.apiUr + apiName)
}


_api.admin = {
	apiUrlList : {
		admin_user : "admin/api/admin_user/"
	}
}
_api.admin.admin_user = {
	login : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "User/login" )} , 
	out_login : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "User/out_login" )} , 
	create : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "User/create" )} , 
	remove : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "User/remove" )} , 
	edit : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "User/edit" )} , 
}
_api.admin.admin_user.group = {
	create : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "group/create" )} , 
	remove : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "group/remove" )} , 
	edit : function(data){return promise(data , _api.admin.apiUrlList.admin_user + "group/edit" )} , 
}

