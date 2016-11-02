function adminLogin(){
	new submit({
		form : "#js-admin-login" ,
		api : _api.admin.admin_user.login ,
		target : $("#submit") ,
		message : '登录成功，正在跳转到后台',
		rule : {
			'username' : { max : 16 , min : 6 , name : '用户名' } ,
			'password' : { max : 16 , min : 6 , name : '密码' } ,
		}
	});
}