	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/home.css'
	)))?>
</head>
<body>
	<?php $this->load->view('admin/template/Menu.php' , array('active' => 1 , 'song_active' => 2));?>

	<div class="warpper">
		<button class="btn danger"><i class="fa fa-trash-o"></i>删除已选</button>
		<button class="btn success" onclick="create_user();"><i class="fa fa-server"></i>创建权限组</button>
		<div class="box">
			<table class="table-view">
				<tr>
					<th><input type="checkbox"></th>
					<th>权限组名称</th>
					<th width="60%">权限列表</th>
					<th>所属权限人数</th>
					<th>操作</th>
				</tr>
				<tr>
					<td><input type="checkbox"></td>
					<td><div class="type danger">
						超级管理员
					</div></td>
					<td>所有权限</td>
					<td>1人</td>
					<td>正常</td>
					<td>
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					</td>
				</tr>				<tr>
					<td><input type="checkbox"></td>
					<td><div class="type danger">
						超级管理员
					</div></td>
					<td>文章编辑,文章发布,文章审核,文章编辑,文章发布,文章审核,文章编辑,文章发布,文章审核,文章编辑,文章发布,文章审核</td>
					<td>1人</td>
					<td>正常</td>
					<td>
						<i class="fa fa-edit"></i>
						<i class="fa fa-trash-o"></i>
					</td>
				</tr>
			</table>
		
		</div>
		
	</div>



	<?php $this->load->view('admin/template/footer');?>
	<?php Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/pages/admin_user/main.js' ,
		'admin/assets/js/pages/admin_user/group/main.js'
	)) , 'js');?>
</body>
</html>