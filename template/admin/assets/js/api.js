
var _api = {} , isRequest = true;
var doAjax = function(options , isfile){
	// if(isRequest){
	// 	isRequest = false;
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
				if(data.STATE){
					options.promise.resolve(data.DATA);
				}else{
					options.promise.reject(data.ERROR);
				}
			},
			error : function(data){
				console.log(data)
				options.promise.reject("请求出现异常，服务器繁忙或出现问题无法处理您的请求，请稍候再试！");
			},
			complete : function(){
				isRequest = true;
			}
		});

	// }else{
	// 	options.promise.reject("点击频率过高，请稍候重试");
	// }
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


_api.ad = {}
_api.ad.admin = {}
_api.ad.User = {
	apiUrl : "ad/api/User/" , 
	reg : function(data){return promise(data , this.apiUrl + "reg" )} , 
	login : function(data){return promise(data , this.apiUrl + "login" )} , 
	out_login : function(data){return promise(data , this.apiUrl + "out_login" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	withdrawals : function(data){return promise(data , this.apiUrl + "withdrawals" )} , 
}


_api.ad.admin.User = {
	apiUrl : "ad/api/admin/User/" , 
	clear : function(data){return promise(data , this.apiUrl + "cleart" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	pay_check : function(data){return promise(data , this.apiUrl + "pay_check" )} , 
	pay_remove : function(data){return promise(data , this.apiUrl + "pay_remove" )} , 
	remove_data : function(data){return promise(data , this.apiUrl + "remove_data" )} , 
}
_api.ad.admin.Config = {
	apiUrl : "ad/api/admin/Config/" , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
}
_api.ad.admin.Article = {
	apiUrl : "ad/api/admin/Article/" , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 

}









_api.adminUser = {
	apiUrl : "jaqradmin123/api/admin_user/" , 
	login : function(data){return promise(data , this.apiUrl + "login" )} , 
	outLogin : function(data){return promise(data , this.apiUrl + "outLogin" )} , 
}

_api.admin = {}
_api.admin.Clear = {
	apiUrl : "jaqradmin123/api/clear/" , 
	not_login_and_article : function(data){return promise(data , this.apiUrl + "not_login_and_article" )} , 
}
_api.admin.photo = {
	apiUrl : "jaqradmin123/api/photo/" , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	check : function(data){return promise(data , this.apiUrl + "check" )} , 
	lock : function(data){return promise(data , this.apiUrl + "lock" )} , 
	unlock : function(data){return promise(data , this.apiUrl + "unlock" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	star : function(data){return promise(data , this.apiUrl + "star" )} , 
	unstar : function(data){return promise(data , this.apiUrl + "unstar" )} , 
}
_api.admin.friend = {
	apiUrl : "jaqradmin123/api/friend/" , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
}

_api.admin.reMoney = {
	apiUrl : "jaqradmin123/api/reMoney/" , 
	check : function(data){return promise(data , this.apiUrl + "check" )} , 
}

_api.admin.article = {
	apiUrl : "jaqradmin123/api/article/" , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	check : function(data){return promise(data , this.apiUrl + "check" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	reset : function(data){return promise(data , this.apiUrl + "reset" )} , 
	lock : function(data){return promise(data , this.apiUrl + "lock" )} , 
	unlock : function(data){return promise(data , this.apiUrl + "unlock" )} , 
}
_api.admin.filthy = {
	apiUrl : "jaqradmin123/api/filthy/" , 
	add : function(data){return promise(data , this.apiUrl + "add" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
}
_api.admin.user = {
	apiUrl : "jaqradmin123/api/user/" , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	remove_all : function(data){return promise(data , this.apiUrl + "remove_all" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	v : function(data){return promise(data , this.apiUrl + "v" )} , 
	camera_v : function(data){return promise(data , this.apiUrl + "camera_v" )} , 
	camera : function(data){return promise(data , this.apiUrl + "camera" )} , 
	config : function(data){return promise(data , this.apiUrl + "config" )} , 
	clear_login : function(data){return promise(data , this.apiUrl + "clear_login" )} , 
	jubao_remove : function(data){return promise(data , this.apiUrl + "jubao_remove" )} , 
	jubao_feng : function(data){return promise(data , this.apiUrl + "jubao_feng" )} , 
	jiefeng : function(data){return promise(data , this.apiUrl + "jiefeng" )} , 
	remove_nonline_message : function(data){return promise(data , this.apiUrl + "remove_nonline_message" )} , 
	remove_bill : function(data){return promise(data , this.apiUrl + "remove_bill" )} , 
	remove_bill_all : function(data){return promise(data , this.apiUrl + "remove_bill_all" )} , 
}
_api.admin.notice = {
	apiUrl : "jaqradmin123/api/notice/" , 
	remove_seven : function(data){return promise(data , this.apiUrl + "remove_seven" )} , 
	remove_readed : function(data){return promise(data , this.apiUrl + "remove_readed" )} , 
	all_send : function(data){return promise(data , this.apiUrl + "all_send" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	removeSan : function(data){return promise(data , this.apiUrl + "removeSan" )} , 
	
}
_api.admin.config = {
	apiUrl : "jaqradmin123/api/config/" , 
	edit_seo : function(data){return promise(data , this.apiUrl + "edit_seo" )} , 
	edit_email : function(data){return promise(data , this.apiUrl + "edit_email" )} , 
	add : function(data){return promise(data , this.apiUrl + "add" )} , 
}
_api.admin.outonline = {
	apiUrl : "jaqradmin123/api/outonline/" , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	upload : function(data){return promise(data , this.apiUrl + "upload")} , 
}

_api.admin.master = {
	apiUrl : "jaqradmin123/api/Master/" , 
	editMaster : function(data){return promise(data , this.apiUrl + "editMaster" )} , 
	addMaster : function(data){return promise(data , this.apiUrl + "addMaster" )} , 
	removeMaster : function(data){return promise(data , this.apiUrl + "removeMaster" )} , 
	getVideoFile : function(data){return promise(data , this.apiUrl + "getVideoFile" )} , 
	removeVideoFile : function(data){return promise(data , this.apiUrl + "removeVideoFile" )} , 
	addMessage : function(data){return promise(data , this.apiUrl + "addMessage" )} , 
	removeMessage : function(data){return promise(data , this.apiUrl + "removeMessage" )} , 
	editMessage : function(data){return promise(data , this.apiUrl + "editMessage" )} , 
}
_api.admin.page = {
	apiUrl : "jaqradmin123/api/page/" , 
	editClassList : function(data){return promise(data , this.apiUrl + "editClassList" )} , 
	createPage : function(data){return promise(data , this.apiUrl + "createPage" )} , 
	editPage : function(data){return promise(data , this.apiUrl + "editPage" )} , 
	removePage : function(data){return promise(data , this.apiUrl + "removePage" )} , 
}

_api.base = {}
_api.base.phone = {
	apiUrl : "api/base_bin/" , 
	phone_send : function(data){return promise(data , this.apiUrl + "phone_send" )} , 

}

_api.home = {}
_api.home.photo = {
	apiUrl : "api/photo/" , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
}
_api.home.qq = {
	apiUrl : "api/qq/" , 
	bind : function(data){return promise(data , this.apiUrl + "bind" )} , 
}
_api.home.online_message = {
	apiUrl : "api/online_message/" , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
}
_api.home.pay = {
	apiUrl : "api/pay/" , 
	wxpay : function(data){return promise(data , this.apiUrl + "wxpay" )} , 
	alipay : function(data){return promise(data , this.apiUrl + "alipay" )} , 
}
_api.home.test = {
	apiUrl : "api/test/" , 
	reg_user_new : function(data){return promise(data , this.apiUrl + "reg_user_new" )} , 
}
_api.home.user = {
	apiUrl : "api/user/" , 
	login : function(data){return promise(data , this.apiUrl + "login" )} , 
	out_login : function(data){return promise(data , this.apiUrl + "out_login" )} , 
	get_data : function(data){return promise(data , this.apiUrl + "get_data" )} , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	edit : function(data){return promise(data , this.apiUrl + "edit" )} , 
	is_username : function(data){return promise(data , this.apiUrl + "is_username" )} , 
	is_nick_name : function(data){return promise(data , this.apiUrl + "is_nick_name" )} , 
	is_qq : function(data){return promise(data , this.apiUrl + "is_qq" )} , 
	reg_user : function(data){return promise(data , this.apiUrl + "reg_user" )} , 
	reg_user_new : function(data){return promise(data , this.apiUrl + "reg_user_new" )} , 
	edit_header_image : function(data){return promise(data , this.apiUrl + "edit_header_image" )} , 
	edit_mood_log : function(data){return promise(data , this.apiUrl + "edit_mood_log" )} , 
	edit_contact : function(data){return promise(data , this.apiUrl + "edit_contact" )} , 
	check_phone : function(data){return promise(data , this.apiUrl + "check_phone" )} , 
	check_qq : function(data){return promise(data , this.apiUrl + "check_qq" )} , 
	check_email : function(data){return promise(data , this.apiUrl + "check_email" )} , 
	vimeo : function(data){return promise(data , this.apiUrl + "vimeo" )} , 
	re_password : function(data){return promise(data , this.apiUrl + "re_password" )} , 
	reset_password : function(data){return promise(data , this.apiUrl + "reset_password" )} , 
	remove_camera : function(data){return promise(data , this.apiUrl + "remove_camera" )} , 
	see : function(data){return promise(data , this.apiUrl + "see" )} , 
	gift : function(data){return promise(data , this.apiUrl + "gift" )} , 
	shuiguo : function(data){return promise(data , this.apiUrl + "shuiguo" )} , 
	buy_vip : function(data){return promise(data , this.apiUrl + "buy_vip" )} , 
	add_friend : function(data){return promise(data , this.apiUrl + "add_friend" )} , 
	remove_friend : function(data){return promise(data , this.apiUrl + "remove_friend" )} , 
	video : function(data){return promise(data , this.apiUrl + "video" )} , 
	illegal : function(data){return promise(data , this.apiUrl + "illegal" )} , 
	about_gift : function(data){return promise(data , this.apiUrl + "about_gift" )} , 
	update_secret : function(data){return promise(data , this.apiUrl + "update_secret" )} , 
	reMoney : function(data){return promise(data , this.apiUrl + "reMoney" )} , 
	get_vip_data : function(data){return promise(data , this.apiUrl + "get_vip_data" )} , 
	edit_password : function(data){return promise(data , this.apiUrl + "edit_password" )} , 
	down : function(data){return promise(data , '../../' + this.apiUrl + "down" )} , 
}
_api.home.notice = {
	apiUrl : "api/notice/" , 
	send : function(data){return promise(data , this.apiUrl + "send" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
}
_api.home.article = {
	apiUrl : "api/article/" , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	remove_all : function(data){return promise(data , this.apiUrl + "remove_all" )} , 
	top : function(data){return promise(data , this.apiUrl + "top" )} , 
	get_article_data : function(data){return promise(data , this.apiUrl + "get_article_data" )} , 
}
_api.home.envelope = {
	apiUrl : "api/envelope/" , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
	remove : function(data){return promise(data , this.apiUrl + "remove" )} , 
	read : function(data){return promise(data , this.apiUrl + "read" )} , 
	buy_look : function(data){return promise(data , this.apiUrl + "buy_look" )} , 
}


_api.home.citysex = {
	apiUrl : "api/citysex/" , 
	get_list : function(data){return promise(data , this.apiUrl + "get_list" )} , 
	get_regal : function(data){return promise(data , this.apiUrl + "get_regal" )} , 
	get_list_first : function(data){return promise(data , this.apiUrl + "get_list_first" )} , 
}
_api.home.outonline = {
	apiUrl : "api/outonline/" , 
	create : function(data){return promise(data , this.apiUrl + "create" )} , 
}
_api.home.heartbeat = {
	apiUrl : "api/heartbeat/" , 
	heartbeat : function(data){return promise(data , this.apiUrl + "index" )} , 
}