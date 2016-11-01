<script type="text/dom">
	var popup_toast = <div class="toast" class="toast" id="js-toast">
		<p></p>
	</div>

	
	var popup_input_toast = <div class="input-toast" id="js-input-toast">
		<div class="input-toast-up">
			<i id="js-i" class="fa fa-sort-asc"></i>
		</div>
		<p></p>
	</div>

	var popup_sure = <div class="popup-opacity" id="js-popup-sure">
		<div class="popup-sure">
			<div class="popup-sure-header">
				<h1></h1>
				<div class="close" id="js-close"><i class="fa fa-power-off"></i></div>
			</div>
			<div class="popup-sure-content">
				
			</div>
			<div class="popup-sure-bottom">
				<button class="btn fezocms">确认</button>
				<button class="btn" id="js-close">取消</button>
			</div>
		</div>
	</div>



	var admin_user_create = <div class="admin_user_create">
		<div class="left">
			<input type="text" placeholder="请输入用户名" id="js-username">
			<input type="text" placeholder="请输入密码" id="js-password">
			<div class="class">
				<select id="js-class">
					<option value="0">超级管理员</option>
				</select>
				<button class="btn">创建新的权限组</button>
			</div>
			<select id="js-state">
				<option value="0">正常</option>
				<option value="-1">限制登录</option>
			</select>
		</div>

	var admin_group_create = <div class="admin_group_create">
		<div class="left">
			<input type="text" placeholder="请输入权限组名称" id="js-username">
			<input type="text" placeholder="请输入密码" id="js-password">
			<div class="class">
				<select id="js-class">
					<option value="0">超级管理员</option>
				</select>
				<button class="btn">创建新的权限组</button>
			</div>
			<select id="js-state">
				<option value="0">正常</option>
				<option value="-1">封禁</option>
			</select>
		</div>

</script>