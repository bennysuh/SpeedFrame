function adminLogin(){


	new submit({
		form : "#js-admin-login" ,
		api : _api.admin.admin_user.login ,
		rule : {
			'username' : { max : 16 , min : 6 , name : '用户名'} ,
			'password' : { max : 16 , min : 6 , name : '密码'} ,
		} ,
		success : function(message){
			
		} ,
		error : function(error){

		}
	});
}