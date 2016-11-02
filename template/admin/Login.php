	<?=Loader::access(array_merge($_SESSION['assets_css'] , array(
		'admin/assets/css/login.css'
	)))?>
</head>
<body>
	<div class="login">
		<form id="js-admin-login" onsubmit="adminLogin();return false;">
			<input type="text" id="js-username" value="admin123">
			<input type="password" id="js-password" value="admin123">
			<button type="submit" id="submit">登录</button>
		</form>
	</div>



<?php 
	$this->load->view('admin/template/footer');
	Loader::access(array_merge($_SESSION['assets_javascript'] , array(
		'admin/assets/js/login.js'
	)) , 'js');
?>