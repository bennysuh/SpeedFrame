function create_user(){
	popup.sure({
		title : "创建用户" ,
		style : {width : 500} , 
		content : dom.get('admin_user_create') ,
	}).then(function(target){
		new submit({
			form : '.admin_user_create' ,
			api : _api.admin.admin_user.create,
			target : $(target.target) ,
			message : '创建用户成功',
			rule : {
				'username' : {'max' : 16 , 'min' : 6 , 'name' : '管理员用户名'} , 
				'password' : {'max' : 16 , 'min' : 6 , 'name' : '管理员密码'} , 
				'class' : {is_null : false , is_number : true} , 
				'state' : {is_null : false , is_number : true} , 
			}
		});
	})
}