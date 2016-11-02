	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/home.css'
	)))?>
</head>
<body>
	<?php $this->load->view('admin/template/Menu.php' , array('active' => 1));?>

	<div class="warpper">
			<button class="btn danger"><i class="fa fa-trash-o"></i>删除已选</button>
			<button class="btn success" onclick="create_user();"><i class="fa fa-user-plus"></i>创建新用户</button>
			<select>
				<option value="">超级管理员</option>
			</select>
		<div class="box">
			<table class="table-list" align="center" valign="center">
				<tr>
					<th width='20'></th>
					<th width='50'></th>
					<th width=''></th>
					<th width=''></th>
					<th width='120'></th>
					<th width=''></th>
					<th width=''></th>
					<th width=''></th>
					<th width='70'></th>
					<th width=''></th>
				</tr>

				{User_list}
					<tr>
						<td><div class="widget-checkbox" data-id="{id}"></div></td>
						<td><img src="./static/images/ldpi_893688_7f165009-886a-4469-b12b-08e2d2d6112b_icon.png" width="40"></td>
						<td>{username}</td>
						<td>{username}</td>
						<td><div class="type danger">超级管理员</div></td>
						<td><i class="fa fa-clock-o"></i>2016年11月1日 10:05:46</td>
						<td><i class="fa fa-clock-o"></i>127.168.0.1</td>
						<td><i class="fa fa-list"></i>0篇</td>
						<td>
							<div class="type success">正常</div>
						</td>
						<td>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-lock"></i>
							<i class="fa fa-edit"></i>
							<i class="fa fa-trash-o"></i>
						</td>
					</tr>
				{/User_list}

			</table>
		
		</div>
		
	</div>





	<?php $this->load->view('admin/template/footer');?>
	<?php Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/pages/admin_user/main.js'
	)) , 'js');?>
</body>
</html>