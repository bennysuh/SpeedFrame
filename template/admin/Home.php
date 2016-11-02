	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/home.css'
	)))?>
</head>
<body>
	<?php $this->load->view('admin/template/Menu.php' , array('active' => 0));?>

	<div class="warpper">
		<div class="box">
			<h1>后台首页 <span>/ Speed Frame</span></h1>
			<div class="message success">
				欢迎您使用 Speed Frame ， Speed Frame 是基于 Codeigniter 的网站快速开发框架，更够有效的帮助网站开发商大幅度提高网站开发速度，相对于现在流行的织梦等文章管理系统 SpeedFrame 更具有优势，更方便二次开发。SpeedFrame中携带了众多能够网站开发中需要用到的功能，能够有效的满足网站开发中的各种需求。
			</div>
		</div>


	</div>
	



	<?php $this->load->view('admin/template/footer');?>
	<?php Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/login.js'
	)) , 'js');?>
</body>
</html>