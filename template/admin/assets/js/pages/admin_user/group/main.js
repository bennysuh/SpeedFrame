
function admin_group_create(){
	popup.sure({
		title : "创建权限组" ,
		style : {width : 500} , 
		content : dom.get('admin_group_create') ,
	}).then(function(target){

		var limit = new Array();
		target.popup.find(".limit .widget-checkbox").each(function(index, el) {
			if($(el).is('.active')){
				limit.push($(el).attr('name'))
			}
		});
		new submit({
			form : '.admin_group_create' ,
			api : _api.admin.admin_user.group.create,
			target : $(target.target) ,
			message : '创建权限组成功',
			appendParames : {
				limit : limit
			} ,
			rule : {
				groupName : {'max' : 16 , 'min' : 6 , 'name' : '权限组名称'} , 
				state : {is_null : false , is_number : true , 'name' : '权限组状态'} , 
				limit : {is_null : true , 'name' : '允许功能' , other : target.popup.find(".limit")} , 
			}
		});
	})
}