<?php $this->load->view($admin_template_name . '/template/top_header')?>
<div class="left-menu">
	<ul>
		<li><a href="./{admin_template_name}"><i class="fa fa-home"></i><span>首页</span></a></li>
		<li><a href="./{admin_template_name}/admin_user"><i class="fa fa-user"></i><span>管理员管理</span></a></li>
		<li><a href="./{admin_template_name}/article"><i class="fa fa-list-alt"></i><span>文章管理</span></a></li>
		<li><a href="./{admin_template_name}/article"><i class="fa fa-th-list"></i><span>文章管理</span></a></li>
		<li><a href="./{admin_template_name}/article"><i class="fa fa-folder-open"></i><span>文章管理</span></a></li>
		<li><a href="./{admin_template_name}/article"><i class="fa fa-cogs"></i><span>文章管理</span></a></li>
	</ul>
</div> 
<div class="son-menu">
	<div class="item">
		<li class="active"><a href="./{admin_template_name}/home"><span><i class="fa fa-home"></i> 后台首页</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-list-ul"></i> 信息统计</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-refresh"></i> 缓存更新</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-file-text-o"></i> 操作日志</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-server"></i> 站点管理</span></a></li>
	</div>
	<div class="item">
		<li class="active"><a href="./{admin_template_name}/admin_user"><span><i class="fa fa-user"></i> 管理列表</span></a></li>
		<li><a href="javascript:void(0)" onclick="create_user()"><span><i class="fa fa-plus"></i> 创建用户</span></a></li>
		<li><a href="./{admin_template_name}/admin_user/group"><span><i class="fa fa-server"></i> 管理权组</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-file-text-o"></i> 操作日志</span></a></li>
		<li><a href="./{admin_template_name}/admin_user/trash"><span> <i class="fa fa-trash-o"></i> 回收站</span></a></li>
	</div>
	<div class="item">
		<li class="active"><a href="./{admin_template_name}"><span><i class="fa fa-home"></i> 后台首页</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-list-ul"></i> 信息统计</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-refresh"></i> 缓存更新</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-file-text-o"></i> 操作日志</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-server"></i> 站点管理</span></a></li>
	</div>
	<div class="item">
		<li class="active"><a href="./{admin_template_name}"><span><i class="fa fa-home"></i> 后台首页</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-list-ul"></i> 信息统计</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-refresh"></i> 缓存更新</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-file-text-o"></i> 操作日志</span></a></li>
		<li><a href="./{admin_template_name}"><span><i class="fa fa-server"></i> 站点管理</span></a></li>
	</div>
</div>

<script type="text/javascript">
	var menuActive = <?=isset($active) ? $active : 0?>;
	var menuSongActive = <?=isset($song_active) ? $song_active : 0?>;
</script>