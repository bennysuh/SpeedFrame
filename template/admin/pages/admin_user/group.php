	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/home.css'
	)))?>
</head>
<body>
	<?php $this->load->view('admin/template/Menu.php' , array('active' => 1 , 'song_active' => 2));?>

	<div class="warpper">
		<button class="btn danger"><i class="fa fa-trash-o"></i>删除已选</button>
		<button class="btn success" onclick="admin_group_create();"><i class="fa fa-server"></i>创建权限组</button>
		<div class="box">
			<table class="table-view">
				<tr>
					<th><div class="widget-checkbox" data-id="{id}"></div></th>
					<th>权限组名称</th>
					<th width="60%">权限列表</th>
					<th>所属权限人数</th>
					<th>操作</th>
				</tr>
				<tr>
					<td><div class="widget-checkbox" data-id="{id}"></div></td>
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
					<td><div class="widget-checkbox" data-id="{id}"></div></td>
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


	<script type="text/dom">
		<!-- 管理员用户组创建 -->
		var admin_group_create = <div class="admin_group_create">
		<div class="left">
			<input type="text" placeholder="请输入权限组名称" id="js-groupName">
		
			<select id="js-state">
				<option value="0">正常</option>
				<option value="-1">封禁</option>
			</select>
			<div class="tools">
				<button class="btn">全选</button>
				<button class="btn">全不选</button>
				<span> 已选权限：10个</span>
			</div>
			<input type="hidden" id="js-limit">
			<div class="limit">
				<?php
					$Jurisdiction = $this->config->item('Jurisdiction');
					foreach ($Jurisdiction as $key => $value) {
						echo '<h2>' . $key . '</h2>';
						foreach ($value as $song_key => $song_value) {
							echo '<label class="checkbox" for="' . $song_value . '"><div class="widget-checkbox two2" name="' . $song_value . '" id="' . $song_value . '"></div><span>' . $song_key . '</span></label>';
						}
					}
				?>
			</div>
		</div>
	</script>





	<?php $this->load->view('admin/template/footer');?>
	<?php Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/pages/admin_user/main.js' ,
		'admin/assets/js/pages/admin_user/group/main.js'
	)) , 'js');?>
</body>
</html>